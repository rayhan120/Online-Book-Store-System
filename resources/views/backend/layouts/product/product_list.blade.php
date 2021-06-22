@extends('backend.master')
@section('content')
<h1 class="h2">{{$title}}</h1>

<a class="btn btn-success" href="{{route('product.from')}}">Create new Book</a>

<table class="table table-bordered mg-b-0">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Author</th>
      <th scope="col">Price</th>
      <th scope="col">Publised Year</th>

      <th scope="col">Page Number</th>
      <th scope="col">Language</th>

      <th scope="col">Catagory_name</th>
      
      <th scope="col">Description</th>
      <!--<th scope="col">description</th> -->
      <th scope="col">quentity</th> 
      <th scope="col">Image</th> 
      
      
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($product as $key=>$data)
  
    <tr>
      <th scope="row">{{$key+1}}</th>
    
      
  
      <td>{{$data->name}}</td>
      <td>{{$data->author}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->publised_date}}</td>
      <td>{{$data->page}}</td>
      <td>{{$data->language}}</td>
      
      
      
      <td>{{$data->manuproduct->Name}}</td>
    <!--  <td>{{$data->description}}</td> -->
    <td>{{$data->description}}</td>
    <td>{{$data->quentity}}</td>
    
<!--for image-->
      <td>
      <img width="80px" src="{{url('/uploads/product/'.$data->image)}}" alt="">
     
      </td>
      
      <td>
      <a class="btn btn-success" href="{{route('product.edit',$data->id)}}"> Edit </a>
      <a class="btn btn-danger" href="{{route('product.delete',$data->id)}}"> Delete </a>
      </td>
      
      

    </tr>
    @endforeach
    
  </tbody>
</table>

     {{$product->links()}}

@endsection