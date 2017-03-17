<?php 
namespace App;
use Eloquent;

class Paket extends Eloquent{
	protected $table = 'paket';
	public $incrementing = false;

	public function agen(){
		return $this->hasMany('App\Agen','paket_id');
	}
}
	
?>