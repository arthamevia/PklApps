<?php

namespace App\Http\Controllers;
use App\Models\transaksi;
use App\Models\pengunjung;
use App\Models\karyawan;
use App\Models\dt;
use App\Models\kamar;
use Illuminate\Http\Request;

class transaksi1controller extends Controller
{
    public function transaksi()
    {
        $transaksi2 = transaksi::all();
        $pengunjung2 = pengunjung::all();
        $karyawan2 = karyawan::all();
        $dt2 = dt::all();
        $kamar2 = kamar::all();
        return view('hotel.transaksi', compact('transaksi2', 'pengunjung2', 'karyawan2', 'dt2', 'kamar2'));
    }
}
