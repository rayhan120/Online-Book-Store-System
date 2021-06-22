
   @extends('frontend.master')
@section('content')


<div class="col-md-12" id="printarea"> 


<table class="table table-bordered mg-b-0">
<p style="color: blue; text-align: center;  font-size: 30px"></p>
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">country</th>
      <th scope="col">City</th>
  
      
      <th scope="col">Order status</th>
     
      
      
      <!--<th scope="col">description</th> -->
     
     
    </tr>
  </thead>
  <tbody>

  
  @foreach($orders as $key=>$data)
  
    <tr>
      <th scope="row">{{$key+1}}</th>
    
      
      <td>{{$data->name}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->country}}</td>
      <td>{{$data->city}}</td>
     
      <td>{{$data->status}}</td>
      
      
      
      
     
     <!-- <td>{{$data->description}}</td> -->
      
<!--for image-->
     
      
      

    </tr>
    @endforeach

   
</tbody>
</table>
</div>











@endsection