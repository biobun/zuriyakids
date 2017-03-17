<?php 
namespace App\Http\Controllers;
use Validator, Redirect, Hash;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Agen;
use App\Paket;
use App\Reseller;
use App\KonfirmasiPembayaran;
use Mail;
use DB;
	/**
	* 
	*/
	class RegistrationController extends Controller
	{
		public function register(){
			$paket = Paket::where('id','like','AG%')->get(); 
			return view('pages.register', ['paket'=> $paket]);
		}
		public function store(){
			$rules = array(
				'inputpaket' => 'required',
				'inputhp' => 'required',
				'inputemail' => 'required|email|unique:agen,email',
				'inputpassword' => 'required|min:6',
				'inputnama' => 'required',
				'inputusername' => 'required|unique:agen,username',
				);
			$validation = Validator::make(Input::all(), $rules);
			if ($validation->fails()) {
				return redirect()->to('daftar')->withErrors($validation);
			}
			$paket = Input::get('inputpaket');
			$row_count = agen::count()+1;
			$no_pendaftaran = str_pad($row_count, 4, '0', STR_PAD_LEFT);
			$id_agen = "AG".$paket.$no_pendaftaran;
			
			$agen = new agen;
			$agen ->id = $id_agen;
			$agen ->email = Input::get('inputemail');
			$agen ->password = Hash::make(Input::get('inputpassword'));
			$agen ->nama = Input::get('inputnama');
			$agen ->username = Input::get('inputusername');
			$agen ->handphone = Input::get('inputhp');
			$agen ->paket_id = Input::get('inputpaket');
			$agen ->status = Input::get('inputstatus');

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

			];

			Mail::send('emails.activations', $data, function($message) use($agenSend){
	                $message->to($agenSend['email']);
	                $message->subject('Pendaftaran Agen Zuriyakids');
            	});
				return redirect()->to('login')->with('success','Silahkan Cek Email Anda untuk Konfirmasi Pembayaran');
			}
			echo "gagal";
			return redirect('register') ->withInput();
		}
		public function reseller($username){
			$paket = Paket::where('id','like','RS%')->get(); 
			return view('pages.register-reseller', ['paket'=>$paket]);

		}
		public function registerreseller($username){
			$rules = array(
				'inputpaket' => 'required',
				'inputhp' => 'required',
				'inputemail' => 'required|email|unique:reseller,email',
				'inputpassword' => 'required|min:6',
				'inputnama' => 'required',
				'inputusername' => 'required|unique:reseller,username',
				);
			$validation = Validator::make(Input::all(), $rules);
			if ($validation->fails()) {
				return redirect()->to('daftar-reseller')->withErrors($validation);
			}
			$paket = Input::get('inputpaket');
			$row_count = reseller::count()+1;
			$no_pendaftaran = str_pad($row_count, 4, '0', STR_PAD_LEFT);
			$id_reseller = "RS".$paket.$no_pendaftaran;
			
			$agen = agen::where('username',$username)->first();
			$id_agen = $agen['id'];

			$reseller = new reseller;
			$reseller ->id = $id_reseller;
			$reseller ->agen_id = $id_agen;
			$reseller ->email = Input::get('inputemail');
			$reseller ->password = Hash::make(Input::get('inputpassword'));
			$reseller ->nama = Input::get('inputnama');
			$reseller ->username = Input::get('inputusername');
			$reseller ->handphone = Input::get('inputhp');
			$reseller ->paket = Input::get('inputpaket');
			$reseller ->status = Input::get('inputstatus');

			if ($reseller->save()) {
				return redirect()->to('login')->with('success','Silahkan Cek Email Anda untuk Konfirmasi Pembayaran');
			}
			return redirect()->to('daftar-register') ->withInput();
		}
		public function dashboard(Request $request){
			if (Auth::check()) {
				return view('pages.dashboard')->with('user',Auth::user());
			}else{
				return redirect('/login')->with('login_error', 'Anda harus login terlebih dahulu');
			}
		}
}
 ?>