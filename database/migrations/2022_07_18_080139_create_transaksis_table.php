<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->integer('no_transaksi');
            $table->string('id_pengunjung');
            $table->string('id_karyawan');
            $table->integer('jumlah_kamar');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->integer('lama_nginap');
            $table->bigInteger('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
