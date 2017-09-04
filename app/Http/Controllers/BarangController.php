<?php 
namespace zuriyakids\Http\Controllers;
use Auth, Validator, Redirect, Hash, Session;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use zuriyakids\Barang;
	/**
	* 
	*/
	class BarangController extends Controller
	{
		public function tambah(){
			return view('pages.stok-barang');
		}
		public function edit($kd_barang){
			$barang = Barang::find($kd_barang);
			return view('pages.editbarang')->with('barang',$barang);
		}
		public function update(){
			$kd_barang 		= Input::get('kd_barang');
			$barang 		= Barang::find($kd_barang);

			if ($barang) {
				$barang->id_barang 		= Input::get('kd_barang');
				$barang->nama_barang 	= Input::get('nama_barang');
				$barang->harga_ecer 	= Input::get('hargaecer');
				$barang->harga_reseller = Input::get('hargareseller');
				$barang->harga_agen 	= Input::get('hargaagen');
				$barang->stok 			= Input::get('stok');
				$barang->save();
				return redirect::to('dashboard/stok-barang')->withInput();
			}else{
				echo "salah";
			}
			return view('pages.stok-barang');
		}
	}
?>