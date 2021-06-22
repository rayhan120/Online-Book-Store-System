@extends('frontend.master')
@section('content')


<!--
<style>
.card{
  b
}


</style>

-->



@if(session()->has('success'))
      <div clss='alert alert-success'>  {{session()->get('success')}}  </div>
    @endif
    
  
	
		<div class="card">
			<div class="container-fliud">
				<div class="WRAPPER row">
					<div class="preview col-md-12">


					<div class="album py-5 bg-light ">
    <div class="container bg-light">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        

      @foreach($product as $data)
      <div class="col">
          <div class="card shadow-sm "> 
          <!--  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
         
         <!--use for image-->
         <img width="200px" hight="100px" src="{{url('/uploads/product/'.$data->image)}}" alt="">


            <div class="card-body">
              <p class="card-text">{{$data->name}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{route('curt.add',$data->id)}}" class="btn btn-sm btn-outline-dark bg-danger">Add to cart</a>
                  <a href="{{route('product.show',$data->id)}}" class="btn btn-sm btn-outline-dark bg-primary text-white">Details</a>
                </div>
                <small class="text-muted"><h3> ৳{{$data->price}}</h3></small>
              </div>
            </div>
          </div>
        </div>
        

@endforeach


					</div>
					
				</div>
			</div>
		</div>
	


@endsection