<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class pengunjungseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengunjung = [
            ['id_pengunjung' => '11', 'nama_pengunjung' => 'Yuli', 'alamat' => 'Rancamanyar', 'jenis_kelamin' => 'perempuan', 'no_telpon' => '085676378', 'no_ktp' => '232456'],
            ['id_pengunjung' => '12', 'nama_pengunjung' => 'Nadia', 'alamat' => 'Coblong', 'jenis_kelamin' => 'perempuan', 'no_telpon' => '0897263542', 'no_ktp' => '928834'],
            ['id_pengunjung' => '13', 'nama_pengunjung' => 'Rifqi', 'alamat' => 'Graha', 'jenis_kelamin' => 'laki-laki', 'no_telpon' => '08996375455', 'no_ktp' => '9837645'],
            ['id_pengunjung' => '14', 'nama_pengunjung' => 'Raza', 'alamat' => 'Nusa', 'jenis_kelamin' => 'laki-laki', 'no_telpon' => '0882736547', 'no_ktp' => '92084365'],
            ['id_pengunjung' => '15', 'nama_pengunjung' => 'Astri', 'alamat' => 'Bandung', 'jenis_kelamin' => 'perempuan', 'no_telpon' => '0892775365', 'no_ktp' => '98386454']
        ];

        DB::table('pengunjungs')->insert($pengunjung);
    }
}
