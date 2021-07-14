
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container ">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-success shadow-sm ">
    <div class="container py-2">

      <a href="{{route('website')}}"   class="navbar-brand d-flex align-items-center text-white ">
      <!--  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>-->
        <strong >Online Book Store System</strong>
      </a>


      <form action="{{ route('product.search') }}" method="POST" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            @csrf
          <input id="input" name="search"  type="text" class="form-control" placeholder="Search Books..." aria-label="Search">

        </form>
     <!-- catagory Dropdown-->

      <div class="dropdown ">
  <button class="btn btn-danger dropdown-toggle text-white"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Select Category
  </button>
  <div class=" dropdown-menu bg-dark  text-danger " aria-labelledby="dropdownMenuButton">


<!--all product show-->
              <a  class="dropdown-item text-danger " href="{{route('product.under.catagory','all')}}">All Book </a>
              
              <!--catagory under book show-->
              
           @foreach($manu as $category)
           
           <a class="dropdown-item text-danger "  href="{{route('product.under.catagory',$category->id)}}">{{$category->Name}}</a>
           @endforeach
    
  </div>
 

  

</div>



<!-- <img src="image/cart.jpg "  style="width: 70px; height: 70px;;" alt="cover image"> -->

<!--cart-->
<a href="{{route('curt.view')}}" class="btn btn-warning btn-sm "> <span class="badge  badge-success text-white"><h6>Cart({{count(Cart::content())}})</h6> </span> </a>

@auth 



<a href="{{route('my.order')}} " class="text-danger navbar-brand btn btn-dark "><h6>My Orders
</h6></a>




<div class="btn-group dropright">

  <button type="button" class="btn btn-secondary dropdown-toggle btn-success" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <h6 class="text-white  btn btn-primary">{{auth()->user()->name}} </h6>
  </button>
  <div class="dropdown-menu">
 <!-- <a class="dropdown-item" href="changepassword.php">Setting</a>
            <a class="dropdown-item" href="{{route('profile.view')}}">Profile</a>
            <div class="dropdown-divider"></div>
            -->
            <a class="dropdown-item" href="{{route('logout')}} ">Logout</a>
  </div>
</div>


  <!--<span style="color:white" class="text-primary" > <a href="#" class="text-white navbar-brand btn btn-dark"> {{auth()->user()->name}} </span>-->
 <!-- <a href="{{route('logout')}} " class="text-danger navbar-brand btn btn-dark "><h6>Logout</h6></a>-->
   
@else
<a  class="text-white navbar-brand btn btn-dark" href="{{route('login.form')}}" ><h6>Login</h6></a>  

 <a   class="text-white navbar-brand btn btn-dark " href="{{route('registration.form')}}"> <h6>Registration</h6></a>
 <a  class="text-white navbar-brand btn btn-dark" href="{{route('contact.admin')}}" ><h6>Contact</h6></a> 

@endauth


      
      
    </div>
  </div>
</header>
