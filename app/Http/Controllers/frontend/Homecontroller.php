<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\products;
use App\Models\Manu;
use App\Models\Order;
use App\Models\payments;
use App\Models\User;
use App\Models\orderdetails;
use Gloudemans\Shoppingcart\facades\cart;
use Illuminate\Support\facades\DB;
class Homecontroller extends Controller
{
   public function website()
   {

    
    $all_product=products::all();

    //dd($all_product);
 
    return view('frontend.layout.homepage',compact('all_product'));
   }

public function profileview()

{
   $orders=Order::where('cusomer_id',auth()->user()->id)->get();
//dd($orders);
  
$product=orderdetails::find($id);
//dd($product);

return view('frontend.layout.profile',compact('orders'));
return redirect()->back();

}

public function myorder()

{
        

   $report_orders=Order::where('cusomer_id',Auth()->user()->id)->paginate(100);
  
return view('frontend.layout.my_order',compact('report_orders'));

}








}
