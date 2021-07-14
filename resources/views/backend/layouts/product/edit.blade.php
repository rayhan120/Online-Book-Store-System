@extends('backend.master')
@section("content")
<div class="row">

<div class="col-md-3 bg-dark">

</div>
<div class="col-md-6  mt-3 mb-3 text-danger p-2" > 
<form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data" > 


 
<!--419 page expired error-->
  @csrf
  <!--for put method-->
  @method('PUT')

  
<!--for product name-->


    <div class="form-group">
        <lavel for="name"> Enter Book Name: </lavel>
        <input id="name" value="{{$product->name}}" class="form-control" type="text" name="name" placeholder="Enter Book Name" class="from-control">
    </div>
    <!--for author name-->
    <div class="form-group">
        <lavel for="author"> Enter Author:  </lavel>
        <input id="author" value="{{$product->author}}" class="form-control"  type="text" name="author" placeholder="Enter author" class="from-control">
    </div>
   

<!--for price-->

    <div class="form-group">
         <lavel for="price"> Enter Book price:  </lavel>
         <input id="price" value="{{$product->price}}" class="form-control" type="number" name="price" placeholder="Enter Book Price" class="from-control">
     </div>
 <!--for publised-->

 <div class="form-group">
         <lavel for="publised_date"> Enter Publication Year: </lavel>
         <input id="publised_date" value="{{$product->publised_date}}" class="form-control" type="number" name="publised_date" placeholder="Enter publised_date" class="from-control">
     </div>
  
<!--description-->



     <div class="form-group">
         <lavel for="page"> Enter page: </lavel>
         <input id="page" value="{{$product->page}}" class="form-control" type="text" name="page" placeholder="Enter page number" class="from-control">
     </div>

     <div class="form-group">
         <lavel for="language"> Enter language: </lavel>
         <input id="language" value="{{$product->language}}" class="form-control" type="text" name="language" placeholder="Enter language" class="from-control">
     </div>

    <div class="form-group">
       <lavel for="quentity"> Enter Book Quentity: </lavel>
        <input id="quentity" value="{{$product->quentity}}"  class="form-control" type="number" name="quentity" placeholder="Enter Book Quentity" class="from-control">
     </div>
      
 <!--for select catagory-->

    <div class="form-group">
         <lavel for="catagory_id"> select catagory: </lavel>

       <select class="form-control" name="catagory_id" id="catagory_id">

           @foreach($catagory_loop as $data)

           <option @if($product->catagory_id==$data->id) selected @endif value="{{$data->id}}">{{$data->Name}} </option>

            @endforeach
    
        </select>
     </div>
   

     <div class="form-group">
         <lavel for="description"> Enter description: </lavel>
         <input id="description" value="{{$product->description}}" class="form-control" type="text" name="description" placeholder="Enter description" class="from-control">
     </div>

     <br>


 <!--for button-->
        <button type="submit" class="btn btn-primary waves-effect"> Creat </button>

   </div>
   

</form>
      <div class="col-md-3 bg-dark"> 

      </div>
</div>

@endsection