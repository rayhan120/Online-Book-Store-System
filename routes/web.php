<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\qtyupdate;
use App\Http\Controllers\Ordercontroller;
use App\Http\Controllers\frontend\Ordercontroller as frontendoder;
use App\Http\Controllers\productcontroller;
use  App\Http\Controllers\frontend\productcontroller as frontendproduct;
use App\Http\Controllers\Manucontroller;
use  App\Http\Controllers\frontend\Usercontroller;
use App\Http\Controllers\desbordcontroller;
use  App\Http\Controllers\backend\Usercontroller as backendUsercontroller;
use App\Http\Controllers\frontend\contactcontroller;
use App\Http\Controllers\Reportcontroller;
use App\Http\Controllers\frontend\Checkoutcontroller;
use App\Http\Controllers\frontend\paymentcontroller;




//website frontend route here
Route::get('/',[Homecontroller::class,'website'])->name('website');
//search user
Route::post('/product/search',[frontendproduct::class,'search'])->name('product.search');
//for registration
Route::get('/registration/form',[Usercontroller::class,'registrationform'])->name('registration.form');
Route::post('/registration/create',[Usercontroller::class,'register'])->name('register');
//login
Route::get('/login',[Usercontroller::class,'loginform'])->name('login.form');
Route::post('/dologin',[Usercontroller::class,'dologin'])->name('login');

//logout
Route::get('/logout',[Usercontroller::class,'logout'])->name('logout');
//Single product view

Route::get('/view/product/{product_id}',[frontendproduct::class,'showproduct'])->name('product.show');
//see product
Route::get('/product/under/catagory/{catagory_id}',[frontendproduct::class,'productunsecatagory'])->name('product.under.catagory');

//contact
Route::get('/contact/admin',[contactcontroller::class,'contact'])->name('contact.admin');

//for cart
Route::group(['middleware'=>'auth'],function(){

    Route::get('/add-to-curt/{id}',[frontendoder::class,'addtocurt'])->name('curt.add');
    Route::get('/view-cart}',[frontendoder::class,'viewcart'])->name('curt.view');
    
    
});
//payment
Route::get('/payment/system/{id}',[paymentcontroller::class,'payment'])->name('payment.order');
Route::post('/payment/order',[paymentcontroller::class,'confirmpayment'])->name('confirm.payment');

//thank you
Route::get('/thankyou/fororder',[paymentcontroller::class,'thankyou'])->name('thankyou.fororder');

//cartUpdate
Route::post('/cartupdate/{rowId}',[frontendoder::class,'cartupdate'])->name('cart.update');
//cartremove
Route::get('/remove/{rowId}',[frontendoder::class,'removecartitem'])->name('cart.remove');

//profile
Route::get('/profile/view/',[Homecontroller::class,'profileview'])->name('profile.view');
//order_details
//my order
Route::get('my/order/',[Homecontroller::class,'myorder'])->name('my.order');
Route::get('myorder/details/{id}',[frontendoder::class,'myorderdetails'])->name('myorder.details');



//status order frontend cancel
Route::get('/status/update/{stauts}/{id}',[frontendoder::class,'statusUpdate'])->name('statuss.update');
Route::get('/cancel/user/{stauts}/{id}',[frontendoder::class,'canceluser'])->name('cancel.user');






//user edit
Route::get('user/edit/{id}',[Usercontroller::class,'edituser'])->name('user.edit');
//put for update
Route::put('user/edit/{id}',[Usercontroller::class,'updateuser'])->name('user.update');
//order 
Route::get('/order',[checkoutcontroller::class,'checkout'])->name('Order.list');
Route::post('/order',[checkoutcontroller::class,'confirmorder'])->name('confirm.order');


//website backend route here
//admin route here

Route::group(['prefix'=>'admin'],function ()
{

//admin login routes

route::get('login',[backendUsercontroller::class,'loginform'])->name('admin.login');
route::post('dologin',[backendUsercontroller::class,'dologin'])->name('admin.dologin');



//use for middleware
//check admin .is it login or not?
route::group(['middleware'=>'admin-auth'],function(){


    //............
//Route::get('/', function () {
    //return view('backend.master');
//});
//deshbord
Route::get('/',[desbordcontroller::class,'master'])->name('master');
Route::get('/deshbord',[desbordcontroller::class,'deshbord'])->name('deshbord');



////Order

Route::get('/order/show',[Ordercontroller::class,'list'])->name('order.show');
//Route::get('/order/cancele/{order_id}',[Ordercontroller::class,'updatestatus'])->name('order.show');
//search admin
Route::post('/order/search',[Ordercontroller::class,'search'])->name('order.search');


//order_details
Route::get('/status/update/{stauts}/{id}',[Ordercontroller::class,'statusUpdate'])->name('status.update');
Route::get('/profile/view/details/{id}',[Ordercontroller::class,'orderdetails'])->name('order.details');





//checkout
//Route::get('/checkout',[Checkoutcontroller::class,'Checkoutorder'])->name('Checkout.order');
//Route::get('/checkout/store',[Checkoutcontroller::class,'Checkoutstore'])->name('Checkout.store');

//Route::post('/order/create',[Ordercontroller::class,'create'])->name('order.create');
//Route::get('category/list',[categorycontroller::class,'list'])->name('category.list');
//Route::get(uri:'product/list',[Productcontroller::class,'list'])->name('product.list');






//admin logout routes
route::get('logout',[backendUsercontroller::class,'logout'])->name('admin.logout');
//reg user
Route::get('reg/user',[backendUsercontroller::class,'reguser'])->name('reg.user');


//catagory routes
Route::get(  'manu/list',[Manucontroller::class,'list'])->name('manu.list');
Route::post( 'manu/creat',[Manucontroller::class,'create'])->name('manu.creat');
Route::get('delete/{id}',[Manucontroller::class,'deletecatagory'])->name('catagory.delete');
//for edit
Route::get('edit/{id}',[Manucontroller::class,'editcategory'])->name('category.edit');
//put for update
Route::put('edit/{id}',[Manucontroller::class,'updatcategory'])->name('category.update');

 
//report route
Route::get('report',[Reportcontroller::class,'bookreport'])->name('book.report');
Route::get('details/report/{id}',[Reportcontroller::class,'reportdetails'])->name('report.details');






//product
Route::group(['prefix'=>'product'],function ()
    {

Route::get('list',[Productcontroller::class,'list'])->name('product.list');
Route::get('create',[Productcontroller::class,'creatfrom'])->name('product.from');
Route::post('creat',[Productcontroller::class,'create'])->name('product.creat');
//for delete
Route::get('delete/{id}',[Productcontroller::class,'deleteproduct'])->name('product.delete');
//for edit
Route::get('edit/{id}',[Productcontroller::class,'editproduct'])->name('product.edit');
//put for update
Route::put('edit/{id}',[Productcontroller::class,'updateproduct'])->name('product.update');
     });


    });




   });