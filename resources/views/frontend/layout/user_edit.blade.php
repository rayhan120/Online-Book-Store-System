@extends('frontend.master')

@section('content')

<div class="row">

<div class="col-md-2">


</div>
<div class="col-md-8">




<form action="{{route('user.update',$users->id)}}" method="post" enctype="multipart/form-data" > 

   @csrf
        <h1> profile </h1>
        
  <!--for put method-->
  @method('PUT')

<div class="form-group">
<lavel for="name"> Enter User Name:  </lavel>

<input required class="form-control" value="{{$users->name}}" id="name" type="text" name="name" placeholder="Enter User Name">
</div>


<div class="form-group">
<lavel for="email"> Enter User Email:  </lavel>

<input required class="form-control" value="{{$users->email}}" id="email" type="email" name="email" placeholder="Enter User Email">
</div>

<div class="form-group">
<lavel for="password"> Enter User password:  </lavel>

<input required  class="form-control" value="{{$users->password}}" id="password" type="password" name="password" placeholder="Enter User password">
</div>


<button type="submit" class="btn btn-success"> Regiester</button>

</div>




</form>

<div class="col-md-2">


</div>

</div>






@endsection