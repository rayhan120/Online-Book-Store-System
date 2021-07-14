@extends('frontend.master')

@section('content')

<div class="row">

<div class="col-md-3">


</div>
<div class="col-md-6">



<form action="{{route('register')}}" method="post">

   @csrf
        <h1> User Registration </h1>

      @if ($errors->any())
      @foreach ($errors->all() as $error)

      <div class="alert alert-danger"> {{$error}} </div>

      @endforeach
      @endif

      @if(session()->has('success'))
      <div clss='alert alert-success'>  {{session()->get('success')}}  </div>
    @endif

<div class="form-group">
<lavel for="name"> Enter User Name:  </lavel>

<input required class="form-control" id="name" type="text" name="name" placeholder="Enter User Name">
</div>


<div class="form-group">
<lavel for="email"> Enter User Email:  </lavel>

<input required class="form-control"  id="email" type="email" name="email" placeholder="Enter User Email">
</div>

<div class="form-group">
<lavel for="password"> Enter User password:  </lavel>

<input required  class="form-control"  id="password" type="password" name="password" placeholder="Enter User password">
</div>


<button type="submit" class="btn btn-success"> Regiester</button>

</div>


</form>
<div class="col-md-4">


</div>

</div>






@endsection