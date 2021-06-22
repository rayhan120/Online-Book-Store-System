<?php

namespace App\Http\Controllers\frontend;
use Gloudemans\Shoppingcart\facades\cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\products;
use App\Models\Order;
use App\Models\payments;
use App\Models\orderdetails;

class Ordercontroller extends Controller
{
    public function addtocurt($id)
    {

        $product=products::find($id);
        if((int)$product->quentity>0){
            Cart::add([
                'id' => $id,
             'name' =>$product->name, 
             'qty' => 1, 
             'price' =>$product->price, 
             'options' => ['image'=>$product->image ],
             'weight' => 0, 
             ]);
           return redirect()->back()->with('success','product add to curt.');
        }
        return redirect()->back()->with('success','Stock not avaiable.');
    }
    

    
    public function viewcart()
    {
        $cart= Cart::content();
        

       
        return view('frontend.layout.viewcart',compact('cart'));
    }
    
    
    public function cartupdate(Request $request,$rowId )
    {

    $product=Products::find(Cart::get($rowId)->id);
    if((int)$product->quentity>(int)$request->input('queantity'))
    {
        Cart::update($rowId, $request->input('queantity'));
        return redirect()->back()->with('success','Cart Updated.');
    }
 
      
        return redirect()->back()->with('success','Product stock not available.');
    }

   

    public function removecartitem(Request $request,$rowid )
    {


       Cart::remove($rowid);
        return redirect()->back();
    }

    //public function clearcart() )
    //{


       // Cart::destroy();
       // return redirect()->back();
   // }






    public function checkout($id)
    {
        
        
        return view('frontend.checkout.checkout');
    }


    public function myorderdetails($id)
    {
         
 
         $report_orders=Order::with(['details','payment'])->find($id);
    
       
 

 return view('frontend.layout.myorder_details',compact('report_orders'));
 
     }



     

     public function statusUpdate($status,$id){

        $order=Order::findOrFail($id);
    
        $order->update([
            'status'=>$status
        ]);
    
        return back();
    
    }


    public function canceluser($status,$id){

        $order=Order::findOrFail($id);
    
        $order->update([
            'status'=>$status
        ]);
    
        return back();
    
    }



     



}
