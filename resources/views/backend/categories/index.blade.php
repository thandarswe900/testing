@extends('backend.backendtemplate')

@section('content')

	<div class="container-fluid">
		 <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">  
           
            	<h1 class="h3 mb-0 text-gray-800">Categories List</h1>
            	
            	<a href="{{route('categories.create')}}" class="btn btn-info">Add New</a>
                
	        </div>
	<div class="row">
	<div class="col-md-12">
	<table class="table table-bordered">
		<thead class="bg-dark text-white">
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Photo</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($categories as $category)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$category->name}}</td>
				<td><img src="{{$category->photo}}" class="img-fluid w-50"></td>
				<td>
					<a href="#" class="btn btn-primary">Detail</a>
					<a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">Edit</a>
					<form action="{{route('categories.destroy',$category->id)}}" method="POST">
						@csrf
						@method('DELETE')
						<button class="btn btn-success">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
    </div>
    </div>
    </div>

@endsection