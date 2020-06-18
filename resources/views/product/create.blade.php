@extends('layouts.master')

@section('content')
<form action="/product/create" method="post">
	{{csrf_field()}}
	<div class="form-group">
		<label for="nama_product">Nama Product</label>
		<input name="nama_product" type="text" class="form-control" id="nama_product" aria-describedby="emailHelp" placeholder="Nama Product" required>
		<small id="emailHelp" class="form-text text-muted"> </small>
	</div>

	<div class="form-group">
		<label for="harga_product">Harga Product</label>
		<input name="harga_product" type="text" class="form-control" id="harga_product" aria-describedby="emailHelp" placeholder="Harga Product" required>
		<small id="emailHelp" class="form-text text-muted"></small>
	</div>

	<div class="form-group">
		<label for="">Category Product</label>
		<select name="category_id" id="category_id" class="form-control">
			@foreach($category as $c1)
			<option value="<?=$c1->id?>"><?=$c1->nama_category?></option>
			@endforeach
		</select>
	</div>


	<button type="submit" class="btn btn-primary">Submit</button>
	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</form>

@endsection