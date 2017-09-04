<?php 
namespace zuriyakids;
use Eloquent;

class Transaksi extends Eloquent{
	protected $table = 'transaksi';
	public $incrementing = false;

	public function Agen(){
		return $this->belongsTo('zuriyakids\Agen');
	}
}
	
?>