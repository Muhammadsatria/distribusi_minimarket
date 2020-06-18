@extends('layouts.master')

@section('content')
@if(session('sukses'))
<div class="alert alert-success" role="alert">
	{{session('sukses')}}
</div>
@endif
<div class="row">
	<div class="col-6">
		<h5>Data Category</h5>
	</div>
	<div class="col-6">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
			tambah data category
		</button>


	</div>
</div>

<div class="card mt-5">
	<div class="card-body">


		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>ID Category</th>
					<th>Nama Category</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($category as $c)
				<tr>
					<td>{{ $c->id }}</td>
					<td>{{ $c->nama_category }}</td>

					

					<td><a href="/category/edit/{{ $c->id }}" class="btn btn-warning">Edit</a>
						<a href="/category/delete/{{ $c->id }}" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')">Delete</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>

			<div class="row">
				<div class="col-12">
					Halaman : {{ $category->currentPage() }} <br/>
					Jumlah Data : {{ $category->total() }} <br/>
					Data Per Halaman : {{ $category->perPage() }} <br/>
					<br>
					{{$category->links()}}


				</div>
			</div>
	



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Input Data Product</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="/category/create" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<label for="nama_category">Nama Category</label>
						<input name="nama_category" type="text" class="form-control" id="nama_category" aria-describedby="emailHelp" placeholder="Nama Category" required>
						<small id="emailHelp" class="form-text text-muted"> </small>
					</div>				

					<button type="submit" class="btn btn-primary">Submit</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</form>
			</div>

		</div>
	</div>
	@endsection
	