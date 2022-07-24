<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class transaksiseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksi = [
            ['no_transaksi' => 11, 'id_pengunjung' => '1', 'id_karyawan' => '6a', 'jumlah_kamar' => 5, 'tanggal_masuk' => '2022-07-20', 'tanggal_keluar' => '2022-07-22', 'lama_nginap' => 2, 'total_harga' => 2000000],
            ['no_transaksi' => 12, 'id_pengunjung' => '2', 'id_karyawan' => '7b', 'jumlah_kamar' => 3, 'tanggal_masuk' => '2022-06-20', 'tanggal_keluar' => '2022-06-24', 'lama_nginap' => 4, 'total_harga' => 2400000],
            ['no_transaksi' => 13, 'id_pengunjung' => '3', 'id_karyawan' => '8c', 'jumlah_kamar' => 4, 'tanggal_masuk' => '2022-05-20', 'tanggal_keluar' => '2022-05-22', 'lama_nginap' => 2, 'total_harga' => 200000],
            ['no_transaksi' => 14, 'id_pengunjung' => '4', 'id_karyawan' => '9d', 'jumlah_kamar' => 7, 'tanggal_masuk' => '2022-08-20', 'tanggal_keluar' => '2022-08-23', 'lama_nginap' => 3, 'total_harga' => 2300000],
            ['no_transaksi' => 15, 'id_pengunjung' => '5', 'id_karyawan' => '10e', 'jumlah_kamar' => 5, 'tanggal_masuk' => '2022-07-20', 'tanggal_keluar' => '2022-07-27', 'lama_nginap' => 7, 'total_harga' => 3000000]
        ];

        DB::table('transaksis')->insert($transaksi);
    }
}
