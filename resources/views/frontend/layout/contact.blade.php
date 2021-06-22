
@extends('frontend.master')

@section('content')

<div class="row">

<div class="col-md-4">


</div>
<div class="col-md-5">



<form action="{{route('login')}}" method="post">

   @csrf


    <div class="contact-details  bg-info ml-2 mt-5">
                        <div class="widget">
                           <div class="widget-body">

                              <form action="" name="login" method="post">
                                 <div class="">
                                    <div class="">
                                  <h3 class="section-title">Contact us </h3>
                                      <hr />
                                      <h1></h1>
                 <p><b>Adrress :</b>House #8, Road # 14,
uttara, Dhaka-1230</p>
                <p><b>Contact No. :</b> 01864438069</p>
                <p><b>Email :</b> Rayhanm120@gmail.com </p>
                                    </div> </div>
                                                        
                                 
                               
                              </form>
                           </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                     </div>
                     <!-- WHY? -->
                    <div class="side-wrapper">
                       
                        <img src="images/contact-us.png" alt="" class="img-fluid">
                        <p></p>
                   
 
                     </div>




<div class="col-md-2">


</div>

</div>






@endsection





