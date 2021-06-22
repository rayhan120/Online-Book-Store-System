<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\facades\schema;
use Illuminate\Pagination\Paginator;

//here add
use Illuminate\Support\Facades\View;
use App\Models\Manu;
use App\Models\products;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()

    {
        Paginator::useBootstrap();
        

     $catagories=Manu::all();   
         view::share('manu',$catagories);
        
         $all_product=products::all();
        view::share('products',$all_product);



    }
}
