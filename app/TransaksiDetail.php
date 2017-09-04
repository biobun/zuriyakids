<?php 
namespace zuriyakids;
use Eloquent;

class TransaksiDetail extends Eloquent{
	protected $table = 'transaksi-detail';
	public $incrementing = true;

	public function transaksi(){
		return $this->hasMany('zuriyakids\Transaksi','transaksi_id');
	}
}
	
?>