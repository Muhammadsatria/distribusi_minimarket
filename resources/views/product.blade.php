<!DOCTYPE html>
<html>
<head>
	<title>Distributor Minimarket</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
				
				<h5 class="text-center my-4">Eloquent One To One Relationship</h5>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID Product</th>
							<th>Nama Product</th>
							<th>Harga Product</th>
							<th>Kategori Product</th>
						</tr>
					</thead>
					<tbody>
						@foreach($product as $p)
						<tr>
							<td>{{ $p->id_product }}</td>
							<td>{{ $p->nama_product }}</td>
							<td>{{ $p->harga_product }}</td>
							<td>{{ $p->category->nama_category }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>