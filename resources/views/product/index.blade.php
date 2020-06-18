@extends('layouts.master')

@section('content')
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
		@endif
		<div class="row">
			<div class="col-6">
				<h5>Data Product</h5>
			</div>
			<div class="col-2">
				<!-- Button trigger modal -->
				
				<a href="{{ url('/product/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data Product <i class="fa fa-plus"></i></a>

			</div>
			<div class="col-4">
				<form action="/product" method="get" class="form-inline my-2 my-lg-0">
				<input name="cari" class="form-control mr-sm-2" type="search" placeholder="Cari Product" aria-label="Cari Product" >
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="cari">Search</button>
				</form>
		</div>
		</div>


		<div class="card mt-5">
			<div class="card-body">


				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama Product</th>
							<th>Harga Poduct</th>
							<th>Category</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($product as $p)
						<tr>
							<td>{{ $p->id_product }}</td>
							<td>{{ $p->nama_product }}</td>
							<td>{{ $p->harga_product }}</td>
							<td>{{ $p->nama_category }}</td>
							<td>
							<a href="/product/edit/{{ $p->id_product }}" class="btn btn-warning">Edit</a>
							<a href="/product/delete/{{ $p->id_product }}" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')">Delete</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>

				
			</div>
		</div>
	</div>
	@endsection
	