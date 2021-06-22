@extends('frontend.master')
@section('content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Checkout example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
<form action="{{route('confirm.order')}}" method="post">
    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    @csrf

    <div class="row g-5 mt-sm-5 ">
      <div class="col-md-5 col-lg-4 order-md-last ">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary text-danger">Checkout Summary</span>
          <span class="badge bg-primary rounded-pill"></span>
        </h4>

        

    
        <ul class="list-group mb-3 ">
        @php 
                $total=(float) str_replace(',','',Cart::subtotal());
                @endphp
          <li class="list-group-item d-flex justify-content-between lh-sm bg-info">
            <div>

              <h6 class="my-0">Subtotal</h6>
              <small class="text-muted"></small>
            </div>
            <span class="text-dark">{{Cart::subtotal()}}</span>
          </li>

          <li class="list-group-item d-flex justify-content-between bg-info">
            <span>Subtotal</span>
            <strong>50.00</strong>
          </li>

 <li class="list-group-item d-flex justify-content-between bg-info">
            <span>Total(Incl. taxes)</span>
            <strong>{{$total+50}}</strong>
          </li>

          


          
        </ul>
        

      
       
        
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Shipping Address</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">


            <div class="col-sm-8">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>



            </div>
            
            <div class="form-group col-sm-8">
<lavel for="phone" class="form-label"> Phone Number </lavel>

<input required  class="form-control" name="phone" id="phone" type="text" name="password" placeholder="Enter your phone number">
</div>



         

            <div class="col-8">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" name="address" id="address" placeholder="Enter your address" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            

            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <input type="text" class="form-control" name="country" id="country" placeholder="Enter your country" required>
            </div>

            <div class="col-md-5">
              <label for="city" class="form-label">City</label>
              <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city" required>
            </div>

           
          </div>

          

          

          
          <h2></h2>
          <h6> </h6>

          
          
          
            <div class="action col-md-12">
							<button class="add-to-cart btn btn-default" type="submit">
              <p class="btn btn-lg btn-outline-dark bg-danger">
              Continue to Payment
              </p>
						
             

							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>

            

          <!--<hr class="my-4">-->

          
          
        </form>
      </div>
    </div>
  </main>

  
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
@endsection