<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKonfirmasipembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('konfirmasi_pembayaran', function (Blueprint $table) {
            $table->string('id');
            $table->string('agen_id');
            $table->string('nama_rekening')->nullable();
            $table->string('no_rekening')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('bukti_transfer')->nullable();
            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konfirmasi_pembayaran');
    }
}
