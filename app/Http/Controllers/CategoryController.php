<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
    	//mengambil semua data category
    	$category = \App\Category::all();
      $category = DB::table('category')->paginate(4);

    	//return data ke view
    	return view('category.index', ['category' => $category]);
    }

    public function create(Request $request)
    {
    		\App\Category::create($request->all());
    		return redirect('/category')->with('sukses', 'Data berhasil diinput');
    }

    public function edit($id)
   {
   		$category =Category::find($id);
   		return view('category.edit',['category'=>$category]);

   }

   public function update($id, Request $request)
	{
	    $this->validate($request,[
		   'nama_category' => 'required'
	    ]);

	    $category = Category::find($id); //Berguna untuk menemukan data yang sesuai dengan id
	    $category->nama_category = $request->nama_category;
	    $category->save();
	    return redirect('/category')->with('sukses', 'Data berhasil diedit');
	}

	public function delete($id)
  {
    $category = Category::find($id);
    $category->delete();
    return redirect('/category')->with('sukses', 'Data berhasil dihapus');
  }
}
