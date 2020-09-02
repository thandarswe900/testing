@extends('backend.backendtemplate')

@section('content')

	<div class="container-fluid">
		 <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">  
            <div class="row">
            	<div class="col">
            		<h1 class="h3 mb-0 text-gray-800">Brand Edit Form</h1>
            	</div>
            </div>
          </div>
    
    <form action="{{route('brands.update',$brand->id)}}" method="post" enctype="multipart/form-data">

   @csrf
   @method('PUT')
 
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="name" value="{{$brand->name}}">
      @error('name')
      <div class="text-danger">You need to fill your name here!
    </div>
    @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Photo</label>
    <div class="col-sm-4">
    <input type="file" class="form-control-file" name="photo">
    <img src="{{asset($brand->photo)}}" class="img-fluid w-50">
    <input type="hidden" name="oldphoto" class="form-control-file" value="{{$brand->photo}}">
    </div>
  </div>
 
  
  <div class="form-group row">
    <div class="col-sm-4">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
</div>

@endsection