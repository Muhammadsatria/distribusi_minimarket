<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Category;

class ProductController extends Controller
{

  public function index(){
    $product = Product::All();

    $product = DB::table('product')
    ->join('category', 'category.id', '=', 'product.category_id')
    ->get();
    $data = array(
      'title' => 'index',
      'no'    => 1,
      'product'  => $product,
    );
    return view('product.index',$data);
  }

  public function create()
  {
    $category  = Category::All();
    $data = array(
      'nama_product'     => request('nama_product'),
      'harga_product'     => request('harga_product'),
      'category' => $category,
    );
    return view('product.create',$data);
  }
  public function store()
  {
    Product::create([
      'nama_product'       => request('nama_product'),
      'harga_product'       => request('harga_product'),
      'category_id'   => request('category_id')
    ]);
    return redirect('/product');
  }

   public function edit($id_product)
   {
      $product =Product::find($id_product);
      return view('product.edit',['product'=>$product]);

   }

   public function update($id_product, Request $request)
  {
      $this->validate($request,[
       'nama_product' => 'required',
       'harga_product' => 'required',
       'category_id' => 'required',

      ]);

      $product = Product::find($id_product); //Berguna untuk menemukan data yang sesuai dengan id
      $product->nama_product = $request->nama_product;
      $product->save();
      return redirect('/product')->with('sukses', 'Data berhasil diedit');
  }

  public function delete($id_product)
  {
    $product = Product::find($id_product);
    $product->delete();
    return redirect('/product')->with('sukses', 'Data berhasil dihapus');
  }
}
