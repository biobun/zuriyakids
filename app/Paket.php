<?php 
namespace zuriyakids;
use Eloquent;

class Paket extends Eloquent{
	protected $table = 'paket';
	public $incrementing = false;

	public function agen(){
		return $this->hasMany('zuriyakids\Agen','paket_id');
	}
}
	
?>