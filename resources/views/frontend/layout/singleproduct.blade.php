@extends('frontend.master')
@section('content')








@if(session()->has('success'))
      <div clss='alert alert-success'>  {{session()->get('success')}}  </div>
    @endif
	
	
		<div class="card">
			<div class="container-fliud mt-3 ">
				<div class="WRAPPER row ">
				<div class="details col-md-5 mt-5   ">
					
						<div class="col-md-2">
						</div>
						<div class="col-md-8 border border-secondary  p-xl-4 mx-xl-5 ">
						<div class="preview-pic tab-content ">
						  <div class="tab-pane active" id="pic-1"><img class="mx-auto" style="width: 300px;" src="{{url('/uploads/product/'.$product->image)}}" /></div>
						  <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						</div>
						</div>
						
						
						
						<div class="col-md-2">
						</div>
				
                </div>
					<div class="details col-md-5 mt-5   mx-xl-5  ">
						<h3 class="product-title text-info"> {{$product->name}}</h3>
						<p class="vote ">by <strong class="text-danger" >{{$product->author}}</strong></p>
					
						<p class="vote "> <strong class="text-dark" >In Stock( {{$product->quentity}} copies available)   </strong></p>
						<h4 class="price ">TK. <span>{{$product->price}}</span></h4>
						
						
					
							

							     <div class="action col-md-6 mt-5">
							      <button class="add-to-cart btn btn-default " type="button"><a href="{{route('curt.add',$product->id)}}" class="btn  btn-lg btn-outline-dark bg-danger">Add to cart</a>
						


							      <button class="like btn btn-default " type="button"><span class="fa fa-heart"></span></button>
						         </div>
						</div>
						
						
						
						
						
						



						



					</div>
					
				</div>
			</div>

			
		</div>
	
<div class="row mt-5 ">
<div class="col-md-2">
</div>
<div class="col-md-8">

<table class="table table-bordered">
<h2 class="text-danger text-center" > Specification </h2>
	<tr>
		<td >Title</td>
		<td >{{$product->name}}</td>
	</tr>
	
		<tr>
			<td>Author</td>
			<td>{{$product->author}}</td>
		</tr>
		
		<tr>
			<td>Number of Pages</td>
			<td>{{$product->page}}</td>
		</tr>
	
	
		<tr>
			<td>Published Year</td>
			<td>{{$product->publised_date}}</td>
		</tr>
	
	
		<tr>
			<td>Language</td>
			<td>{{$product->language}}</td>
		</tr>

		<tr>
			<td>Description</td>
			<td>{{$product->description}}</td>
		</tr>
	
</table>
</div>
<div class="col-md-2">
</div>
</div>

@endsection


