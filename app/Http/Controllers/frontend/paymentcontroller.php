<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\payments;
use App\Models\Order;

class paymentcontroller extends Controller
{
    public function payment($id){
$order_id=$id;

        return view('frontend.checkout.payments',compact('order_id'));

    }
    public function confirmpayment(Request $request) 
    {
        
        payments::create([

            'Money'=>$request->Money,
            'order_id'=>$request->order_id,
        
            'pmathod'=>$request->pmathod,
            'MobileNo'=>$request->mobile,
            'TrxID'=>$request->Trx_ID,

            
    
        ]);
        return redirect()->route('thankyou.fororder');
    
    }

    public function thankyou(){

        return view('frontend.checkout.thankyou');
        

    }


}
