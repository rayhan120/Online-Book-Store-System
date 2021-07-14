@extends('backend.master')
@section('content')



<table class="table table-bordered mg-b-0">
<p style="color: blue; text-align: center;  font-size: 30px">Detail of All Order </p>

  <thead>
  
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Order Number</th>
      <th scope="col">Status</th>
      <th scolspm="2" Class="text-center">Details</th> 
      <th scolspm="2" Class="text-center">Action</th> 

      <!--<th scope="col">description</th> -->
      
    </tr>
  </thead>
  <tbody>
  @foreach($products as $key=>$data)
  
    <tr>
      <th scope="row">{{$key+1}}</th>
    
      <td>{{$data->id}}</td>
  
      <td>{{$data->status}}</td>


      <td>   <a    class="btn btn-sm  bg-success text-white"  href="{{route('report.details',$data->id)}}"> View Details </a> </td>

      <td>
     
      <div class="dropdown">
  <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Status
  </button>
  
  
  <div class=" dropdown-menu" aria-labelledby="dropdownMenuButton">
  
    <a class="dropdown-item bg-warning text-white"  href="{{route('status.update',['stauts'=>'deliverd','id'=>$data->id])}}">Deliverd</a>
    <a class="dropdown-item bg-danger" href="{{route('status.update',['stauts'=>'canceled','id'=>$data->id])}} ">Canceled</a>
    <a class="dropdown-item bg-warning text-white" href="{{route('status.update',['stauts'=>'Being Prepard','id'=>$data->id])}} ">Being Prepard</a>
    <a class="dropdown-item bg-danger" href="{{route('status.update',['stauts'=>'confirmed','id'=>$data->id])}} ">Confirmed</a>
    
  </div>
</div>
      </td>
      
     
    </tr>
    @endforeach
  


@endsection