<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class kamarseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kamar = [
            ['no_kamar' => 11, 'jenis_kamar' => 'standar', 'harga' => 500000],
            ['no_kamar' => 12, 'jenis_kamar' => 'singleroom', 'harga' => 600000],
            ['no_kamar' => 13, 'jenis_kamar' => 'deluxeroom', 'harga' => 800000],
            ['no_kamar' => 14, 'jenis_kamar' => 'twinroom', 'harga' => 1500000],
            ['no_kamar' => 15, 'jenis_kamar' => 'presidential', 'harga' => 2000000]
        ];

        DB::table('kamars')->insert($kamar);
    }
}
