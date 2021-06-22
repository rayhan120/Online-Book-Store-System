<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class qtyupdate extends Controller
{
    public function qtyupdate(){

        return view('frontend.checkout.qty_update');

    }
    
}
