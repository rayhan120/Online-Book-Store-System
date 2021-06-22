<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancelordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancelorders', function (Blueprint $table) {
       
            $table->date('delivered_date')->nullable();
        $table->string('canceled_date')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cancelorders');
        $table->date('delivered_date')->nullable();
        $table->string('canceled_date')->nullable();
    }
}
