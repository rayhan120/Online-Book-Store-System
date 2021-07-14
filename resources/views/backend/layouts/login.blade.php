<div class="row">

<div class="col-md-3">


</div>
         <div class="col-md-6" style="padding:100px">



            <form action="{{route('admin.dologin')}}" method="post">

            @csrf

           <h1> User login </h1>
           @if ($errors->any())
           @foreach ($errors->all() as $error)

       <div class="alert alert-danger"> {{$error}} </div>

           @endforeach
         @endif

          @if(session()->has('success'))
      <div clss='alert alert-success'>  {{session()->get('success')}} 
      </div>
          @endif

     <div class="form-group">
          <lavel for="email"> Enter User Email:  </lavel>
           <input required class="form-control"  id="email" type="email" name="email" placeholder="Enter User Email">
     </div>

     <div class="form-group">
            <lavel for="password"> Enter User password:  </lavel>
             <input required  class="form-control"  id="password" type="password" name="password" placeholder="Enter User password">
     </div>

     <button type="submit" class="btn btn-dark"> Login</button>

      <div class="form-group">
         <a class="btn btn-sm  bg-white "  href=""> <h6 class="text-secondary">Forgot Password?</h6> </a>
      </div>

  </div>

 </form>
<div class="col-md-3">


</div>

</div>



<!-- resorce-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Album example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" >

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

    
  </head>
  <body>