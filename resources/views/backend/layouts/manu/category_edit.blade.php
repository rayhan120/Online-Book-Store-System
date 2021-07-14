@extends('backend.master')
@section("content")




<div class="row">

    <div class="col-md-3 bg-dark">

      </div>
       <div class="col-md-6 bg-warning mt-3 mb-3 text-danger p-2" > 

             <form action="{{route('category.update',$category->id)}}" method='post'> 
              @csrf
              @method('PUT')
  <div class="modal-body">
      

    
              <div class="mb-3">
                    <label for="Name" class="form-label"  >Catagory Name</label>
                     <input name='Name' type="text" value="{{$category->Name}}" class="form-control" id="Name" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                    </div>
              </div>
           </div>

            <div class="modal-footer">
               <button type="submit" class="btn btn-primary">Update</button>
                </div> 
            </div>
             </form>
     <div class="col-md-3 bg-dark"> 
</div>
</div>
@endsection