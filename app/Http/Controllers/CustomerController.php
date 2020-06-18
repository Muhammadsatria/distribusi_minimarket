<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Customer;


class CustomerController extends Controller
{
    public function index(Request $request)
    {
      if($request->has('cari')){
        $customer =\App\Customer::where('nama_customer','LIKE','%'.$request->cari.'%')->get();
      }else{
        $customer = \App\Customer::all();
      }
    	//mengambil semua data customer
    	$customer = \App\Customer::all();
      $customer = DB::table('customer')->paginate(4);

    	//return data ke view
    	return view('customer.index', ['customer' => $customer]);
    }

    public function create(Request $request)
    {
    		\App\Customer::create($request->all());
    		return redirect('/customer')->with('sukses', 'Data berhasil diinput');
    }

    public function edit($id)
   {
   		$customer =Customer::find($id);
   		return view('customer.edit',['customer'=>$customer]);

   }

   public function update($id, Request $request)
	{
	    $this->validate($request,[
		   'nama_customer' => 'required',
		   'alamat' => 'required',
		   'password' => 'required',
		   'no_telp' => 'required',

	    ]);

	    $customer = Customer::find($id); //Berguna untuk menemukan data yang sesuai dengan id
	    $customer->nama_customer = $request->nama_customer;
	    $customer->save();
	    return redirect('/customer')->with('sukses', 'Data berhasil diedit');
	}

	public function delete($id)
  {
    $customer = Customer::find($id);
    $customer->delete();
    return redirect('/customer')->with('sukses', 'Data berhasil dihapus');
  }

  
}
