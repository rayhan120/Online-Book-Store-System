 <!--middel -->
 @extends('backend.master')

@section('content')
 <div class="container">
 <p style="color: blue; text-align: center;  font-size: 30px">Online Book Store System
 </p>


<div class="row mt-5 ">
               <div class="col-lg-5 bg-light  ml-xl-4 ">
                   <div class="ibox ">
                       <div class="ibox-title">
                                                           <p class="text-muted text-uppercase m-b-20" href="all-order.php"
                               style="font-size: 20px"><strong>Total Order</strong></p>
                           <h5></h5>
                       </div>
                       <div class="ibox-content">
                           <h1 class="no-margins"> {{$total_order}}</h1>

                           <small>Total order</small>
                       </div>
                   </div>
   
               </div>


               <div class="col-lg-5 bg-light ml-xl-4">
                   <div class="ibox ">
                       <div class="ibox-title">
                                                           <p class="text-muted text-uppercase m-b-20" href="notconfirmedyet.php"
                               style="font-size: 20px"><strong>TOTAL REGD. USER</strong></p>


                       </div>
                       <div class="ibox-content">
                           <h1 class="no-margins">{{$tota_user}}</h1>
                           <small>Total Regd. User</small>
                       </div>
                   </div>
               </div>


               <div class="container">



               

<div class="row mt-5 ">
               <div class="col-lg-5 bg-light  ml-xl-4 ">
                   <div class="ibox ">
                       <div class="ibox-title">
                                                           <p class="text-muted text-uppercase m-b-20" href="all-order.php"
                               style="font-size: 20px"><strong>Total Products</strong></p>
                           <h5></h5>
                       </div>
                       <div class="ibox-content">
                           <h1 class="no-margins">{{$tota_product}}</h1>

                           <small>Total Products</small>
                       </div>
                   </div>
               </div>



        <div class="col-lg-5 bg-light ml-xl-4">
                   <div class="ibox ">
                       <div class="ibox-title">
                                                           <p class="text-muted text-uppercase m-b-20" href="notconfirmedyet.php"
                               style="font-size: 20px"><strong>categories</strong></p>


                       </div>
                       <div class="ibox-content">
                           <h1 class="no-margins">{{$manus}} </h1>
                           <small>Total categories</small>
                       </div>
                   </div>

           </div>



              

</div>
@endsection