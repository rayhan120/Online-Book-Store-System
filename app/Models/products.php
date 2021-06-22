<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $guarded=[];

    

    public function manuproduct()



{


return $this->belongsTo(manu::class,'catagory_id','id');

}
    
}

