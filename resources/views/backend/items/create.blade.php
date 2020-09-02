@extends('backend.backendtemplate')

@section('content')

	<div class="container-fluid">
		 <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">  
            <div class="row">
            	<div class="col">
            		<h1 class="h3 mb-0 text-gray-800">Item Create Form</h1>
            	</div>
            </div>
          </div>
    
    <form action="{{route('items.store')}}" method="post" enctype="multipart/form-data">

   @csrf
  <div class="form-group row">
    <label for="inputCodeno" class="col-sm-2 col-form-label">Code No</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="codeno">
      @error('codeno')
      <div class="text-danger">Please enter at least four character!
    </div>
    @enderror
  </div>
</div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="name">
      @error('name')
      <div class="text-danger">You need to fill your name here!
    </div>
    @enderror
   </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Photo</label>
    <div class="col-sm-4">
    <input type="file" class="form-control" name="photo">
    @error('name')
      <div class="text-danger">Please choose photo!
      </div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="price">
      @error('price')
      <div class="text-danger">You need to fill amount here!
    </div>
    @enderror
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Discount</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="discount" value="0">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-4">
      <textarea class="form-control" name="description"></textarea>
      @error('description')
      <div class="text-danger">You need to fill description here!
    </div>
    @enderror
    </div>
  </div>
  <div class="form-group row">
  	 <label class="col-sm-2 col-form-label">Brand</label>
  	 <div class="col-sm-4">
  	<select class="form-control form-control-md" id="inputBrand" name="brand">
  		<optgroup label="Choose Brand">
  			@foreach($brands as $brand)
  			<option value="{{$brand->id}}">{{$brand->name}}</option>
  			@endforeach
  		</optgroup>
  	</select>
  	</div>
  </div>
  <div class="form-group row">
  	<label class="col-sm-2 col-form-label">Subcategory</label>
  	<div class="col-sm-4">
  	<select class="form-control form-control-md" id="inputSubcategory" name="subcategory">
  		<optgroup label="Choose Subcategory">
  			@foreach($subcategories as $subcategory)
  			<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
  			@endforeach
  		</optgroup>
  	</select>
  </div>
  </div>
 
 {{--  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            First radio
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Second radio
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
          <label class="form-check-label" for="gridRadios3">
            Third disabled radio
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div> --}}
  <div class="form-group row">
    <div class="col-sm-4">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>
</form>
</div>

@endsection