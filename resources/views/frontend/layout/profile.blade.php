



   @extends('frontend.master')
@section('content')


<h1>User Information </h1>
<form action="" method="GET"> 
<div class="row">
<div class="col-md-12">

<div class="row">










</form>




<div class="col-md-12" id="printarea"> 


<table class="table table-bordered mg-b-0">
<p style="color: blue; text-align: center;  font-size: 30px"></p>
  <thead>
    <tr>
      <th scope="col">SL</th>
     
      <th scope="col">Order Number</th>
      
     
     
      <th scope="col">Order date</th>
      <th scope="col">DETAILS</th>
      
     
      
      
      <!--<th scope="col">description</th> -->
     
     
    </tr>
  </thead>
  <tbody>

  
  @foreach($product as $key=>$data)
  
    <tr>
      <th scope="row">{{$key+1}}</th>
    
      
    
      <td>{{$data->order_id}}</td>
      
     
      
      <td>{{$data->created_at}}</td>
      <td>   <a    class="btn btn-sm  bg-success text-white"  href="{{route('order.details',$data->id)}}"> View Details </a> </td>
       

    </tr>
    @endforeach

   
</tbody>
</table>
</div>







@endsection





