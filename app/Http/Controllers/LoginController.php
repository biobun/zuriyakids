<?php 
namespace App\Http\Controllers;
use Auth, Validator, Redirect, Hash, Session;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use App\User;
	/**
	* 
	*/
	class LoginController extends Controller
	{
		public function login(){
			return view('pages.login', array('page' => 'login'));
		}
		public function authenticate(){
			$user = array(
				'email' => Input::get('email'),
				'password' => Input::get('password')
				);
			if (Auth::attempt($user)) {
				return redirect()->intended('dashboard/home');
			}
			return redirect('login')->with('login_error', 'Email atau Password Salah');
		}
	}
?>