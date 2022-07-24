<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class dtseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = [
            ['id_dtl_transaksi' => '6a', 'no_transaksi' => 11, 'no_kamar' => 8],
            ['id_dtl_transaksi' => '7b', 'no_transaksi' => 12, 'no_kamar' => 3],
            ['id_dtl_transaksi' => '8c', 'no_transaksi' => 13, 'no_kamar' => 4],
            ['id_dtl_transaksi' => '9d', 'no_transaksi' => 14, 'no_kamar' => 9],
            ['id_dtl_transaksi' => '10e', 'no_transaksi' => 15, 'no_kamar' => 7]
        ];

        DB::table('dts')->insert($dt);
    }
}
