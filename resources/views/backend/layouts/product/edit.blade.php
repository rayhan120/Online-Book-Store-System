@extends('backend.master')
@section("content")
<div class="row">

<div class="col-md-3 bg-primary">

</div>
<div class="col-md-6 bg-warning mt-3 mb-3 text-danger p-2" > 
<!--route(post.creat) use for  data post in creat method -->
<!--enctype="" use for file uplode -->
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
<!--
     <div class="form-group">
        <lavel for="description">description</lavel>
        <input name="description" id="description" type="text"  placeholder="Enter Product description" class="from-control">
    </div>
-->
<!--
<div class="form-group">
<lavel for="description">Description: </lavel>
<textarea class="form-control"name="description" for="description" type="text"  placeholder="Enter Book Description" rows="2"></textarea>
</div>
-->
<!--for Quentity-->

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
   

<!--for image uplode

    <div>
     <level for='image'>Please uplode Image: </lavel>
     <input name='image' class="form-control" type='file' value="{{$product->image}}" class='form-control'id='image'>





     </div>

-->
     <br>


 <!--for button-->
        <button type="submit" class="btn btn-primary waves-effect"> Creat </button>

   </div>
   

</form>
<div class="col-md-3 bg-primary"> 

</div>
</div>

@endsection