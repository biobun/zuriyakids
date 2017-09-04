<?php

use Illuminate\Database\Seeder;

class KonfirmasiPembayaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 $konfirmasi_pembayaran = array(
  array('id' => '201705030001','agen_id' => 'AGAG0030001','nama_rekening' => NULL,'no_rekening' => NULL,'jumlah' => NULL,'bukti_transfer' => NULL,'created_at' => '2017-05-03 10:26:35','updated_at' => '2017-05-03 10:26:35'),
  array('id' => '201705040002','agen_id' => 'AGAG0010002','nama_rekening' => NULL,'no_rekening' => NULL,'jumlah' => NULL,'bukti_transfer' => NULL,'created_at' => '2017-05-04 08:42:29','updated_at' => '2017-05-04 08:42:29'),
  array('id' => '201705040003','agen_id' => 'AGAG0020003','nama_rekening' => NULL,'no_rekening' => NULL,'jumlah' => NULL,'bukti_transfer' => NULL,'created_at' => '2017-05-04 08:47:17','updated_at' => '2017-05-04 08:47:17'),
  array('id' => '201705040004','agen_id' => 'AGAG0010004','nama_rekening' => NULL,'no_rekening' => NULL,'jumlah' => NULL,'bukti_transfer' => NULL,'created_at' => '2017-05-04 09:00:52','updated_at' => '2017-05-04 09:00:52'),
  array('id' => '201705040005','agen_id' => 'AGAG0010005','nama_rekening' => NULL,'no_rekening' => NULL,'jumlah' => NULL,'bukti_transfer' => NULL,'created_at' => '2017-05-04 13:43:25','updated_at' => '2017-05-04 13:43:25'),
  array('id' => '201705050006','agen_id' => 'AGAG0030006','nama_rekening' => 'maryam qonita','no_rekening' => '12344321','jumlah' => '7950000','bukti_transfer' => '93075.3fe46ac37ebf2f882a1b21f924623537.jpg.jpg','created_at' => '2017-05-05 00:28:57','updated_at' => '2017-05-05 00:28:57'),
  array('id' => '201705050007','agen_id' => 'AGAG0010007','nama_rekening' => NULL,'no_rekening' => NULL,'jumlah' => NULL,'bukti_transfer' => NULL,'created_at' => '2017-05-05 03:03:00','updated_at' => '2017-05-05 03:03:00'),
  array('id' => '201705050008','agen_id' => 'AGAG0010008','nama_rekening' => 'Rosilawati','no_rekening' => '2601242020','jumlah' => '00','bukti_transfer' => '56181.Screenshot_2017-05-05-11-02-31.png.png','created_at' => '2017-05-05 04:04:37','updated_at' => '2017-05-05 04:04:37'),
  array('id' => '201705050009','agen_id' => 'AGAG0020009','nama_rekening' => 'Dwi Puspitasari','no_rekening' => '039601001116536','jumlah' => '5550000','bukti_transfer' => '69062.Komen untuk Zuriya.jpg.jpg','created_at' => '2017-05-05 09:32:00','updated_at' => '2017-05-05 09:32:00'),
  array('id' => '201705060010','agen_id' => 'AGAG0010010','nama_rekening' => 'Mujahid dullah','no_rekening' => '5210788753','jumlah' => '2799000','bukti_transfer' => '89486.Screenshot_2017-05-06-14-46-10-249_com.android.chrome.png.png','created_at' => '2017-05-06 07:41:05','updated_at' => '2017-05-06 07:41:05'),
  array('id' => '201705060012','agen_id' => 'AGAG0010012','nama_rekening' => 'Yulia Fitri Prahasari','no_rekening' => '001','jumlah' => '001','bukti_transfer' => '71897.Screenshot_2017-05-05-08-13-42-397.jpeg.jpeg','created_at' => '2017-05-06 11:44:24','updated_at' => '2017-05-06 11:44:24'),
  array('id' => '201705080013','agen_id' => 'AGAG0010013','nama_rekening' => NULL,'no_rekening' => NULL,'jumlah' => NULL,'bukti_transfer' => NULL,'created_at' => '2017-05-08 02:04:54','updated_at' => '2017-05-08 02:04:54')
);
 	DB::table('konfirmasi_pembayaran')->insert($konfirmasi_pembayaran);
    }
}
