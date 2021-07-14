@extends('backend.master')
@section('content')

<h1 class="h2">{{$title}}</h1>
  

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ADD catagory
</button>




<table class="table table-bordered mg-b-0">
  <thead>
    <tr>
      <th scope="col">S.No </th>
      <th scope="col">Name</th>
      <th scope="col">Creation Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>

      @foreach($manu_create as $data)
    <tr>
          <th scope="row">{{$data->id}}</th>
          <td>{{$data->Name}}</td>
          <td>{{$data->created_at}}</td>
        <td>
         <!-- <a class="btn btn-primary" href="">View</a>-->
         <a class="btn btn-success" href="{{route('category.edit',$data->id)}}">Edit</a>
         <a class="btn btn-danger" href="{{route('catagory.delete',$data->id)}}">Delete</a>
        </td>
    </tr>
      @endforeach
    
  </tbody>

</table>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
 <form action="{{route('manu.creat')}}" method='post'> 
      @csrf
      <div class="modal-body"> 
        <div class="mb-3">
         <label for="Name" class="form-label">Catagory Name</label>
         <input name='Name' type="text" class="form-control" id="Name" aria-describedby="emailHelp">
       <div id="emailHelp" class="form-text"></div>
       </div>
      </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      
     </div>
  </form>
  </div>
  </div> 
  </tbody>
</table>      
@endsection