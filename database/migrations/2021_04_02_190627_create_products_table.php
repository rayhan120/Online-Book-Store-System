<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
           
            $table->string('name',length:100);
            $table->double('price','10','2')->default(0.0);
            $table->integer('catagory_id');
            $table->string('author',length:100)->nullable();
            $table->integer('publised_date')->default(0.0);
            $table->text("image")->nullable();
            $table->integer('page')->nullable();
            $table->integer('quentity')->nullable();
            $table->string('language')->nullable();
            $table->text('description')->nullable();
             

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
        Schema::dropIfExists('products');
    }
}
