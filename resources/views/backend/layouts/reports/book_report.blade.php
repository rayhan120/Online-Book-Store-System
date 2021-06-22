@extends('backend.master')
@section('content')

<h1>Order Report </h1>
<form action="{{route('book.report')}}" method="GET"> 
<div class="row">
<div class="col-md-8">

<div class="row">


<div class="from-group col-md-6">
    <label for="from">Data form</label>
     <input id="from" type="date" name="from_date" class="from-group" > </input>
</div>






     <div class="from-group col-md-6">
    <label for="to">Data to</label>
     <input  id="to" type="date" name="to_date" class="to-group" > </input>

     
</div>
</div>
</div>
     <div class="col-md-4">
<div class="from-group">
        <button type="submit" class="btn btn-primary"> Search </button>
        <button type="button" onclick="printDiv()" class="btn btn-success"> Print </a>
</div>

</div>

</form>




<div class="col-md-12" id="printarea"> 
<h4>Order from {{$fromdate}} to {{$todate}} </h4>

<table class="table table-bordered mg-b-0">
<p style="color: blue; text-align: center;  font-size: 30px"></p>
  <thead>
    <tr>
      <th scope="col">SL</th>
    
      <th scope="col">Order Number</th>
      <th scope="col">Order date</th>
      <th scope="col">Action</th>
      
      
      
      <!--<th scope="col">description</th> -->
     
     
    </tr>
  </thead>
  <tbody>

  @if(count($report)>0)
  @foreach($report as $key=>$data)
  
    <tr>
      <th scope="row">{{$key+1}}</th>
    
      <td>{{$data->id}}</td>
      <td>{{$data->created_at}}</td>
      <td> <a    class="btn btn-sm  bg-success text-white"  href="{{route('report.details',$data->id)}}"> View Details </a></td>
      
      
     
     <!-- <td>{{$data->description}}</td> -->
      
<!--for image-->
     
      
      

    </tr>
    @endforeach

    @else
    <th>
    <h2 style="color:red" > No data found!. </h2>
    </th>
@endif
</tbody>
</table>
</div>

<script type="text/javascript">


		function printDiv(){
			var printContents = document.getElementById("printarea").innerHTML;
		var	originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;

		}
	
</script>





@endsection