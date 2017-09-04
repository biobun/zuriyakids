<?php 
namespace zuriyakids\Http\Controllers;
use Validator, Redirect, Hash;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use File;
use zuriyakids\Agen;
use zuriyakids\User;
use zuriyakids\Paket;
use zuriyakids\Transaksi;
use zuriyakids\KonfirmasiPembayaran;
use zuriyakids\TransaksiDetail;
use Mail;
use DB;
	/**
	* 
	*/
	class TransaksiController extends Controller
	{
		public function add(Request $request){
			$rules = array(
					'info_id.*' => 'required',
					'jumlah.*'=> 'required|numeric',
					'total.*' => 'required'
				);
			$validation = Validator::make(Input::all(), $rules);
			if ($validation->fails()) {
				return Redirect::back()->with('error','Semua data harus diisi');
			}
			if (Auth::user()->role->name == "Agen") {
				$id_transaksi = "TRAG".date('Ymd').str_pad(Transaksi::count()+1, 4, '0', STR_PAD_LEFT);
			}else{
				$id_transaksi = "TRRS".date('Ymd').str_pad(Transaksi::count()+1, 4, '0', STR_PAD_LEFT);
			}
			$count = count($request->input('total.*'));
			for($i = 0; $i < $count; $i++) {
				$transaksi= new TransaksiDetail;
				$transaksi->transaksi_id = $id_transaksi;
				$transaksi->barang_id = Input::get('info_id.'.$i);
				$transaksi->jumlah = Input::get('jumlah.'.$i);
				$transaksi->total = Input::get('total.'.$i);
				$transaksi->save();
			}
				return Redirect::back()->with('success','Pesanan Ke Pusat telah dikirim');
		}
		public function OrderPesanan(Request $request){
			$rules = array(
					'info_id.*' => 'required',
					'jumlah.*'=> 'required|numeric',
					'total.*' => 'required'
				);
			$validation = Validator::make(Input::all(), $rules);
			if ($validation->fails()) {
				return Redirect::back()->with('error','Semua data harus diisi');
			}

			if (Auth::user()->role->name == "Agen") {
				$id_transaksi = "TRAG".date('Ymd').str_pad(Transaksi::count()+1, 4, '0', STR_PAD_LEFT);
			}else{
				$id_transaksi = "TRRS".date('Ymd').str_pad(Transaksi::count()+1, 4, '0', STR_PAD_LEFT);
			}
			$id_agen = DB::table('agen')->where('username',Auth::user()->username)->first();
			$transaksi = new Transaksi;
			$transaksi->id = $id_transaksi;
			$transaksi->agen_id = $id_agen->id;
			$transaksi->status = 0;

			$count = count($request->input('jumlah.*'));
			// echo $count;
			for ($i = 0; $i<$count; $i++) {
				$TransaksiDetail = new TransaksiDetail;
				$TransaksiDetail->transaksi_id = $id_transaksi;
				$TransaksiDetail->barang_id = Input::get('info_id.'.$i);
				$TransaksiDetail->jumlah = Input::get('jumlah.'.$i);
				$TransaksiDetail->total = Input::get('total.'.$i);
				$TransaksiDetail->save();
			}
			$total = array_sum(Input::get('total'));
			$transaksi->total = $total;
			$transaksi->save();
			return Redirect::back()->with('success','Pesanan Ke Pusat telah dikirim');
		}
		public function UpdateStatus(Request $request, $transaksi_id){
			$id_transaksi = Transaksi::find($transaksi_id);

			if ($id_transaksi) {
				$id_transaksi->status = Input::get('statuspesanan');
				$id_transaksi->save();
				return Redirect::back()->with('success', 'Status pesanan telah diubah');  
			}
		}
		public function EditOrder($transaksi_id){
			$editorder =  DB::table('transaksi-detail')
						->where('transaksi-detail.transaksi_id','=',$transaksi_id)
						->get();
			return view('pages.pesanan-edit',array('editorder'=>$editorder));
		}
	}
?>