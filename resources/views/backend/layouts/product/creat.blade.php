@extends('backend.master')
@section("content")

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="row">


<div class="col-md-3 bg-secondary">

</div>
<div class="col-md-6 bg-light mt-3 mb-3 text-danger p-2" > 
<form action="{{route('product.creat')}}" method="post" enctype="multipart/form-data" > 

  @csrf

  
<!--for product name-->


    <div class="form-group">
        <lavel for="name"> Enter Book Name: </lavel>
        <input id="name" class="form-control" type="text" name="name" placeholder="Enter Book Name" class="from-control">
    </div>
    <!--for author name-->
    <div class="form-group">
        <lavel for="author"> Enter Author:  </lavel>
        <input id="author" class="form-control"  type="text" name="author" placeholder="Enter Author" class="from-control">
    </div>
   

<!--for price-->

    <div class="form-group">
         <lavel for="price"> Enter Book price:  </lavel>
         <input id="price" class="form-control" type="number" name="price" placeholder="Enter Book Price" class="from-control">
     </div>
 <!--for publised-->

 <div class="form-group">
         <lavel for="publised_date"> Enter Publication Year: </lavel>
         <input id="publised_date" class="form-control" type="number" name="publised_date" placeholder="Enter publised Date" class="from-control">
  </div>
     <div class="form-group">
         <lavel for="page"> Enter Page Number: </lavel>
         <input id="page" class="form-control" type="number" name="page" placeholder="Enter Page Number" class="from-control">
     </div>
     <div class="form-group">
        <lavel for="language"> Enter Language:  </lavel>
        <input id="language" class="form-control"  type="text" name="language" placeholder="Enter language" class="from-control">
    </div>
<!--for Quentity -->

    <div class="form-group">
       <lavel for="quentity"> Enter Book Quentity: </lavel>
        <input id="quentity" class="form-control" type="number" name="quentity" placeholder="Enter Book Quentity" class="from-control">
     </div>
     
 <!--for select catagory-->

    <div class="form-group">
         <lavel for="catagory_id"> Select catagory: </lavel>

       <select class="form-control" name="catagory_id" id="catagory_id">

           @foreach($catagory_loop as $data)

           <option value="{{$data->id}}">{{$data->Name}} </option>

            @endforeach
    
        </select>
     </div>
   
<!--for image uplode-->


    <div>
     <level for='image'>Please uplode Image: </lavel>
     <input name='image' class="form-control" type='file'  class='form-control'id='image'>

     </div>

     <div class="form-group">
      <lavel for="description">Description: </lavel>
      <textarea class="form-control"name="description" for="description" type="text"  placeholder="Enter Book Description" rows="3"></textarea>
    </div>
    <br>

 <!--for button-->
        <button type="submit" class="btn btn-primary waves-effect"> Create </button>

   </div>
   

</form>
<div class="col-md-3 bg-secondary"> 

</div>
</div>

@endsection