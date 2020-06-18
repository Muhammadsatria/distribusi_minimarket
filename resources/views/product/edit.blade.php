@extends('layouts.master')

@section('content')
  <h1>Edit data Product</h1>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
    @endif
    <div class="row">
    <div class="col-lg-12">
      
      <form action="/product/update/{{$product->id_product}}" method="post">
        {{csrf_field()}}
        {{ method_field('put') }}

        <div class="form-group">
          <label for="nama_product">Nama Product</label>
          <input name="nama_product" type="text" class="form-control" id="nama_product" aria-describedby="emailHelp" placeholder="Nama Product" value="{{$product->nama_product}}">
          <small id="emailHelp" class="form-text text-muted"> </small>
        </div>

        <div class="form-group">
          <label for="harga_product">Harga Product</label>
          <input name="harga_product" type="text" class="form-control" id="harga_product" aria-describedby="emailHelp" placeholder="Harga Product" value="{{$product->harga_product}}">
          <small id="emailHelp" class="form-text text-muted"></small>
        </div>

        <label for="">Category Product</label>
        <select name="category_id" id="category_id" class="form-control">
          @foreach($category as $c1)
          <option value="<?=$c1->id?>"><?=$c1->nama_category?></option>
          @endforeach
        </select>
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