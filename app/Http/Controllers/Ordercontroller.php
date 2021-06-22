<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\facades\cart;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
class Ordercontroller extends Controller
{
    
    public function list()
    {


        $order=Order::all();
        return view('backend.orderlist',compact('order'));

    }


   


public function statusUpdate($status,$id){

    $order =Order::with('details')->findOrFail($id);

     //foreach($order->details as $item){

        // dd($item);
   // }

    $order->update([
        'status'=>$status
    ]);

    return back();

}


public function orderdetails()
{
    $orders=Order::where('cusomer_id',auth()->user()->id)->get();
    //$order =orderdetails::find();
    return view('frontend.layout.order_details',compact('orders'));

}




}
