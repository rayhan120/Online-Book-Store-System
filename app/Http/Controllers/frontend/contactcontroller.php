<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactcontroller extends Controller
{
  public function contact(){

    //$contact=contacts::all();
    return view('frontend.layout.contact');
  }
}
