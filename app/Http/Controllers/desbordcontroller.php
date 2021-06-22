<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\products;
use App\Models\Manu;

class desbordcontroller extends Controller
{
  public function master()
  {
    $total_order=Order::count();
    $tota_user=User::count();
    $tota_product=products::count();
    $manus=Manu::count();
    
    return view('backend.deshbord',compact('total_order','tota_user','tota_product','manus'));

    return view('backend.deshbord');

  }

  public function deshbord()
  {

    $total_order=Order::count();
    $tota_user=User::count();
    $tota_product=products::count();
    $manus=Manu::count();
    
    return view('backend.deshbord',compact('total_order','tota_user','tota_product','manus'));
  }


}
