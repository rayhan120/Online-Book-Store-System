@extends('backend.master')
@section('content')


<table class="table table-bordered mg-b-0">
<p style="color: blue; text-align: center;  font-size: 30px">User Details </p>
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">name</th>
      <th scope="col">email</th>

      
      
      <!--<th scope="col">description</th> -->
      <th scope="col">Registration Date</th> 
     
    </tr>
  </thead>
  <tbody>
  @foreach($reguser as $key=>$data)
  
    <tr>
      <th scope="row">{{$key+1}}</th>
    
      
  
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->email_verified_at}}</td>
     
     <!-- <td>{{$data->description}}</td> -->
      
<!--for image-->
     
      
      

    </tr>
    @endforeach
    
  

@endsection