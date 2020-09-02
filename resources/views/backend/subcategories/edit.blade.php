@extends('backend.backendtemplate')

@section('content')

	<div class="container-fluid">
		 <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">  
            <div class="row">
            	<div class="col">
            		<h1 class="h3 mb-0 text-gray-800">Subcategory Edit Form</h1>
            	</div>
            </div>
          </div>
    
    <form action="{{route('subcategories.update',$subcategory->id)}}" method="post" enctype="multipart/form-data">

   @csrf
   @method('PUT')
 
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="name" value="{{$subcategory->name}}">
      @error('name')
      <div class="text-danger">You need to fill your name here!
    </div>
    @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-4">
    <select class="form-control form-control-md" name="category">
      <optgroup label="Choose Subcategory">
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </optgroup>
    </select>
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