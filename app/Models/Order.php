<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function details()
    {
        return $this->hasMany(orderdetails::class);
    }


    public function payment()
    {
        return $this->hasOne(payment::class);
    }
   
    

   
}
