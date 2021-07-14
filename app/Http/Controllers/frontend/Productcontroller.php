<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\products;
use App\Models\Manu;



class Productcontroller extends Controller
{
    public function showproduct($id)
         {
            $category=Manu::find($id);

          $product=products::find($id);
          
          //dd($product);


          return view('frontend.layout.singleproduct',compact('product','category'));
         }

         
public function productunsecatagory($cid)
              {
              //get all product from product table where catagory id=$cid
                 if($cid=='all')
                 {
                    $product=products::all();

                 }else{
                    $product=products::where('catagory_id',$cid)->get();

                 }

              


              return view('frontend.layout.productundercatagory',compact('product'));
              


              }
              public function addtocurt($id)
    {

        $product=products::find($id);
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
    

    public function viewcart()
    {

        $cart= Cart::content();
        return view('frontend.layout.viewcart',compact('cart'));
    }


    public function search(Request $request)

    {

    $products=products::where('name','like','%'.$request->search.'%')->get();
  
   


           return view('frontend.layout.search',compact('products'));
    }



}
