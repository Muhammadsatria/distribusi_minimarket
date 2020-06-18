@extends('layouts.master')

@section('content')
	<h1>Edit data Category</h1>
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
		@endif
		<div class="row">
		<div class="col-lg-12">
			
			<form action="/category/update/{{$category->id}}" method="post">
				{{csrf_field()}}
				{{ method_field('put') }}

				<div class="form-group">
					<label for="nama_category">Nama Category</label>
					<input name="nama_category" type="text" class="form-control" id="nama_category" aria-describedby="emailHelp" placeholder="Nama category" value="{{$category->nama_category}}">
					<small id="emailHelp" class="form-text text-muted"> </small>
				</div>
				<button type="submit" class="btn btn-warning">Update</button>
			</form>
			</div>

@endsection