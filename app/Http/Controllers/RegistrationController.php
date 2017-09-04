<?php 
namespace zuriyakids\Http\Controllers;
use Validator, Redirect, Hash;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use zuriyakids\Agen;
use zuriyakids\User;
use zuriyakids\Paket;
use zuriyakids\Transaksi;
use zuriyakids\KonfirmasiPembayaran;
use Mail;
use DB;
	/**
	* 
	*/
	class RegistrationController extends Controller
	{
		public function register($paketpilih){
			$dipilih = $paketpilih;
			$paket = Paket::where('id','like','AG%')->get();
			return view('pages.register', ['paket'=> $paket, 'dipilih'=>$dipilih]);
		}
		public function store($paketpilih){
			$rules = array(
				'paket' => 'required',
				'handphone' => 'required',
				'email' => 'required|email|unique:agen,email',
				'password' => 'required|min:6',
				'nama' => 'required',
				'alamat' => 'required',
				'kota' => 'required',
				'username' => 'required|unique:agen,username|alpha|max:8',
				);
			$validation = Validator::make(Input::all(), $rules);
			if ($validation->fails()) {
				return Redirect::back()->withErrors($validation);
			}
			$paket = Input::get('paket');
			$row_count = agen::count()+1;
			$no_pendaftaran = str_pad($row_count, 4, '0', STR_PAD_LEFT);
			$id_agen = "AG".$paket.$no_pendaftaran;
						

			if (substr(Input::get('handphone'), 0,2) == "62") {
				$hp = Input::get('handphone');
			}elseif (substr(Input::get('handphone'), 0,1) == '0') {
				$hp = substr_replace(Input::get('handphone'), 62, 0, 1);
			}elseif (substr(Input::get('handphone'), 0,3) == "+62") {
				$hp = Input::get('handphone');
				$hp[0]= "";
			}else{
				$hp = Input::get('handphone');
			}
			$kota = ucfirst(input::get('kota')); 

			$agen = new agen;
			$agen ->id = $id_agen;
			$agen ->email = Input::get('email');
			$agen ->password = Hash::make(Input::get('password'));
			$agen ->nama = Input::get('nama');
			$agen ->username = Input::get('username');
			$agen ->handphone = $hp;
			$agen ->kota = $kota;
			$agen ->paket_id = Input::get('paket');
			$agen ->alamat = Input::get('alamat');
			$agen ->agen_id = "PS0001";
			$agen ->status = Input::get('status');
			$agen ->image = Input::get('image');

			$date= date("Ymd");
			$id_konf_pembayaran = $date.$no_pendaftaran; 
			$konf_pembayaran = new KonfirmasiPembayaran;
			$konf_pembayaran ->id = $id_konf_pembayaran;
			$konf_pembayaran ->agen_id = $id_agen;


			if ($agen->save() && $konf_pembayaran->save()) {

			$agenSend = Agen::find($id_agen);
			$agenKonfSend = Agen::find($id_agen)->konfirmasipembayaran;
			$agenPaketSend = Agen::find($id_agen)->paket;

			$data = [
				'nama' => $agenSend->nama, 
				'nama_paket' => $agenPaketSend->nama_paket, 
				'id' => $agenKonfSend->id,
				'harga' => $agenPaketSend->harga,
				'handphone' =>$agenSend->handphone,
				'email'=>$agenSend->email,
				'alamat'=>$agenSend->alamat,
			];
			Mail::send('emails.aktivasi', $data, function($message) use($agenSend){
	                $message->to($agenSend['email']);
	                $message->subject('Pendaftaran Agen Zuriyakids');
            	});
			Mail::send('emails.agen', $data, function($message){
	                $message->to("zuriyakidsteam@gmail.com");
	                $message->subject('Calon Agen Mendaftar Zuriyakids');
            	});
				return redirect()->route('sukses',['id_order' => $id_konf_pembayaran]);
			}
			return redirect('register') ->withInput();
		}
		public function reseller($username, $paketpilih){
			$dipilih = $paketpilih;
			$paket = Paket::where('id','like','RS%')->get();
			return view('pages.register-reseller', ['paket'=>$paket, 'dipilih'=>$dipilih]);
		}
		public function registerreseller($username, $paketpilih){
			$rules = array(
				'paket' => 'required',
				'handphone' => 'required',
				'email' => 'required|email|unique:reseller,email',
				'password' => 'required|min:6',
				'nama' => 'required',
				'username' => 'required|unique:reseller,username',
				'alamat' => 'required'
				);
			$validation = Validator::make(Input::all(), $rules);
			if ($validation->fails()) {
				return Redirect::back()->withErrors($validation);
			}
			$paket = Input::get('inputpaket');
			$row_count = DB::table('agen')->where('id','LIKE','RS%')->count();
			$no_pendaftaran = str_pad($row_count, 4, '0', STR_PAD_LEFT);
			$agen = agen::where('username',$username)->first();
			$id_agen = substr($agen['id'], -4);
			$id_reseller = "RS".$no_pendaftaran."AG".$id_agen;


			if (substr(Input::get('handphone'), 0,2) == "62") {
				$hp = Input::get('handphone');
			}elseif (substr(Input::get('handphone'), 0,1) == '0') {
				$hp = substr_replace(Input::get('handphone'), 62, 0, 1);
			}elseif (substr(Input::get('handphone'), 0,3) == "+62") {
				$hp = Input::get('handphone');
				$hp[0]= "";
			}else{
				$hp = Input::get('handphone');
			}
			$kota = ucfirst(input::get('kota')); 

			$reseller = new agen;
			$reseller ->id = $id_reseller;
			$reseller ->agen_id = $agen['id'];
			$reseller ->email = Input::get('email');
			$reseller ->password = Hash::make(Input::get('password'));
			$reseller ->nama = Input::get('nama');
			$reseller ->username = Input::get('username');
			$reseller ->handphone = $hp;
			$reseller ->kota = $kota;
			$reseller ->paket_id = Input::get('paket');
			$reseller ->status = Input::get('status');
			$reseller ->alamat = Input::get('alamat');
			$reseller ->image = "avatar.png";

			if ($reseller->save()) {
				$resellerSend = Agen::find($id_reseller);
				$resellerPaketSend = Agen::find($id_reseller)->paket;
				$resellerAgen = Agen::find($agen['id']);

				$data = [
					'nama' => $resellerSend->nama, 
					'reseller_hp' => $resellerSend->handphone, 
					'nama_paket' => $resellerPaketSend->nama_paket, 
					'harga' => $resellerPaketSend->harga, 
					'nama_agen' => $resellerAgen->nama, 
					'agen_hp' => $resellerAgen->handphone, 
				];

				Mail::send('emails.reselleractivation', $data, function($message) use($resellerSend){
		                $message->to($resellerSend['email']);
		                $message->subject('Pendaftaran Reseller Zuriyakids');
	            });
	            Mail::send('emails.reseller', $data, function($message) use($resellerAgen){
		                $message->to($resellerAgen['email']);
		                $message->subject('Calon Reseller Mendaftar Zuriyakids');
	            });
				return redirect()->route('sukses-reseller',['id_reseller'=>$id_reseller]);
			}
			return redirect()->to('daftar-register') ->withInput();
		}
		public function dashboard(Request $request){
			if (Auth::check()) {
				if (Auth::user()->hasRole(('Admin'))) {
					// $transaksi = Transaksi::where('id','like','TRAG%')->get();
					$transaksi = DB::table('agen')
						->join('transaksi','agen.id','=','transaksi.agen_id')
						->where('transaksi.id','like','TRAG%')
						->orderBy('transaksi.status','desc')
						->get();
					$transaksiDetail = DB::table('transaksi')
						->join('transaksi-detail', 'transaksi.id','=','transaksi-detail.transaksi_id')
						->where('transaksi.id','like','TRAG%')
						->get();
				}else{
					$id = Auth::user()->agen->id; 
					$transaksi = DB::table('agen')
						->join('transaksi', 'agen.id','=','transaksi.agen_id')
						->where('transaksi.id','like','TRRS%')
						->where('agen.agen_id','=', $id)
						->orderBy('transaksi.status','desc')
						->get();
					$transaksiDetail = DB::table('transaksi')
						->join('transaksi-detail', 'transaksi.id','=','transaksi-detail.transaksi_id')
						->where('transaksi.id','like','TRRS%')
						->get();
				}
				return view('pages.dashboard', array(
					'user'=>Auth::user(),
					'transaksi'=> $transaksi,
					'transaksiDetail'=> $transaksiDetail
					));
				// return view('pages.dashboard')->with('user',Auth::user());
			}else{
				return redirect('/login')->with('login_error', 'Anda harus login terlebih dahulu');
			}
		}
}
 ?>