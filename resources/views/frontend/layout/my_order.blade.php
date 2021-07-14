
 @extends('frontend.master')
@section('content')


<div class="row bg-secondary">


<div class="col-md-1 bg-secondary">

</div>
<div class="col-md-10  bg-light mt-3 mb-4 text-danger p-2" > 

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
      
     
    </tr>
    @endforeach

    
  </tbody>
</table>
</div>

<div class="col-md-1 bg-secondary">

</div>

</div>



@endsection