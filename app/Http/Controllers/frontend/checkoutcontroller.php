<?php

namespace App\Http\Controllers\frontend;
use Gloudemans\Shoppingcart\facades\cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\products;
use App\Models\Order;
use Illuminate\Support\facades\DB;
use App\Models\orderdetails;


class checkoutcontroller extends Controller
{
    public function checkout()
    {
        
        $product=products::all();
        return view('frontend.checkout.checkout',compact('product'));
    }

    

    public function confirmorder(Request $request)
    {    
        $carts = cart::content();
       DB::beginTransaction();
      $total= str_replace(',','',cart::subtotal());
      
       
try{
        $order_data=Order::create([
            
            'cusomer_id'=>auth()->User()->id,
            'price'=>$total,
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'country'=>$request->country,
            'city'=>$request->city,
            'status'=>'Ordered',
            //'card_name'=>$request->card_name,
            //'cardnumber'=>$request->ard_number
           
            ]);
           
            foreach($carts as $data){
        $orderdetailsinfo=orderdetails::create([

            'cusomer_id'=>$order_data->cusomer_id,
            'order_id'=>$order_data->id,
            'book_name'=>$data->name,
            'image'=>$data->options->image,
            'book_qty'=>$data->qty,
            'book_price'=>$data->price

        ]);

            Products::find($data->id)->decrement('quentity',$data->qty);

            }
     DB::commit();
        cart::destroy();
         
        return redirect()->route('payment.order',$order_data);

  

} catch (exceptation $e){


    DB::rollBack();
    return redirect()->back();
    
   }

    }
   
}
