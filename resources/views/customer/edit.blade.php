@extends('layouts.master')

@section('content')
	<h1>Edit data Customer</h1>
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
		@endif
		<div class="row">
		<div class="col-lg-12">
			
			<form action="/customer/update/{{$customer->id}}" method="post">
				{{csrf_field()}}
				{{ method_field('put') }}

				<div class="form-group">
					<label for="nama_customer">Nama Customer</label>
					<input name="nama_customer" type="text" class="form-control" id="nama_customer" aria-describedby="emailHelp" placeholder="Nama Customer" value="{{$customer->nama_customer}}">
					<small id="emailHelp" class="form-text text-muted"> </small>
				</div>

				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input name="alamat" type="text" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="Alamat" value="{{$customer->alamat}}">
					<small id="emailHelp" class="form-text text-muted"></small>
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input name="password" type="text" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Password" value="{{$customer->password}}">
					<small id="emailHelp" class="form-text text-muted"></small>
				</div>


				<div class="form-group">
					<label for="no_telp">No.Telp</label>
					<input name="no_telp" type="text" class="form-control" id="no_telp" aria-describedby="emailHelp" placeholder="No.Telp" value="{{$customer->no_telp}}">
					<small id="emailHelp" class="form-text text-muted"></small>
				</div>



				<button type="submit" class="btn btn-warning">Update</button>
				<a href="{{'/customer'}}" class="btn btn-primary">Back</a>
			</div>

@endsection