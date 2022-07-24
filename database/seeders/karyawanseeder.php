<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class karyawanseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawan = [
            ['id_karyawan' => '6a', 'nama_karyawan' => 'Robby', 'jenis_kelamin' => 'laki-laki'],
            ['id_karyawan' => '7b', 'nama_karyawan' => 'Rizal', 'jenis_kelamin' => 'laki-laki'],
            ['id_karyawan' => '8c', 'nama_karyawan' => 'Hadad', 'jenis_kelamin' => 'laki-laki'],
            ['id_karyawan' => '9d', 'nama_karyawan' => 'Artha', 'jenis_kelamin' => 'perempuan'],
            ['id_karyawan' => '10e', 'nama_karyawan' => 'Asti', 'jenis_kelamin' => 'perempuan']
        ];

        DB::table('karyawans')->insert($karyawan);
    }
}
