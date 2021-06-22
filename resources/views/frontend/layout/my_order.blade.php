
 @extends('frontend.master')
@section('content')




<table class="table table-bordered mg-b-0">
  <thead>
    <tr>
      <th scope="col">S.No </th>
      <th scope="col">Ordernumber</th>
      <th scope="col">Creation Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($report_orders as $key=>$data)
  
    <tr>
      <th scope="row">{{$key+1}}</th>
    
      
    
      <td>{{$data->id}}</td>
      
     
      
      <td>{{$data->created_at}}</td>
      <td>   <a    class="btn btn-sm  bg-success text-white"  href="{{route('myorder.details',$data->id)}}"> View Details </a> </td>
      
      
      
     
     <!-- <td>{{$data->description}}</td> -->
      
<!--for image-->
     
      
      

    </tr>
    @endforeach

    
  </tbody>
</table>




@endsection