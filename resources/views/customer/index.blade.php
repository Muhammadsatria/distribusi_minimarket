@extends('layouts.master')

@section('content')
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-6">
				<h5>Data Customer</h5>
			</div>
			<div class="col-2">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
					tambah data customer
				</button>

			</div>
			<div class="col-4">
				<form action="/customer" method="GET" class="form-inline my-2 my-lg-0">
				<input name="cari" class="form-control mr-sm-2" type="search" placeholder="Cari Customer" aria-label="Cari Customer" >
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="cari">Search</button>
				</form>
		</div>
		</div>


		<div class="card mt-5">
			<div class="card-body">


				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>ID Customer</th>
							<th>Nama Customer</th>
							<th>Alamat</th>
							<th>Password</th>
							<th>No.Telp</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($customer as $c)
						<tr>
							<td>{{ $c->id }}</td>
							<td>{{ $c->nama_customer }}</td>
							<td>{{ $c->alamat }}</td>
							<td>{{ $c->password }}</td>
							<td>{{ $c->no_telp }}</td>
							<td><a href="/customer/edit/{{ $c->id }}" class="btn btn-warning">Edit</a>
							<a href="/customer/delete/{{ $c->id }}" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')">Delete</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>

				<div class="row">
				<div class="col-12">
					Halaman : {{ $customer->currentPage() }} <br/>
					Jumlah Data : {{ $customer->total() }} <br/>
					Data Per Halaman : {{ $customer->perPage() }} <br/>
					<br>
					{{$customer->links()}}


				</div>
			</div>
			</div>
		</div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Input Data Customer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="/customer/create" method="post">
						{{csrf_field()}}
						<div class="form-group">
							<label for="nama_customer">Nama Customer</label>
							<input name="nama_customer" type="text" class="form-control" id="nama_customer" aria-describedby="emailHelp" placeholder="Nama Customer" required>
						</div>

						<div class="form-group">
							<label for="alamat">Alamat</label>
							<input name="alamat" type="text" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="Alamat" required>
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<input name="password" type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Password" required>
						</div>

						<div class="form-group">
							<label for="no_telp">No.Telp</label>
							<input name="no_telp" type="text" class="form-control" id="no_telp" aria-describedby="emailHelp" placeholder="No.Telp" required>
						</div>
						

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
				
			</div>
		</div>
	@endsection
	