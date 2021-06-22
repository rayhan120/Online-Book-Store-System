<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{

    /**
     * Run the migrations.old
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->double('price','10','2')->default(0.0);
            $table->integer('cusomer_id');
            $table->string('name',length:100);
            $table->integer('phone');
            $table->text('address')->nullable();
            $table->string('country',length:100);
            $table->string('city',length:100);
           // $table->string('card_name',length:100);
            //$table->integer('cardnumber');
            $table->string("status")->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
