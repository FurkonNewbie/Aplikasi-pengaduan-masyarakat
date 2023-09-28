<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kategori;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    //
    public function dashboard_petugas()
    {
        $dataPengaduan = Pengaduan::orderBy('id', 'desc')->get();
        $jumlahMasyarakat = User::where('role', 'Masyarakat')->count();
        $jumlahKategori = Kategori::all()->count();
        $jumlahLaporan = Pengaduan::all()->count();
        $jumlahLaporanBaru = Pengaduan::where('status', 'new')->count();
        return view('petugas.dashboard_petugas', compact('dataPengaduan', 'jumlahMasyarakat', 'jumlahKategori', 'jumlahLaporan', 'jumlahLaporanBaru'));
    }
    public function laporan_masuk_petugas()
    {
        return view('petugas.laporan-masuk');
    }
}
