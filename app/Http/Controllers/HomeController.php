<?php

namespace App\Http\Controllers;


use App\Models\Kategori;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('masyarakat.index');
    }
    public function add()
    {
        $data = [
            'title' => 'add pengaduan',
            'kategori' => Kategori::all()
        ];
        return view('masyarakat.add-pengaduan', $data);
    }
    //menampilkan hal login
    public function log()
    {
        return view('masyarakat.login');
    }
    //menampilkan register
    public function registrasi()
    {
        return view('masyarakat.register');
    }
    //menampilkan halaman dashboard sekaligus data pengaduan
    public function dashboard()
    {
        $dataParsing = [
            //contoh statis
            'title' => 'pengaduanku | index',

            //contoh dinamis
            'datapengaduan' => Pengaduan::with(['kategori', 'user'])->where('users_id', auth()->user()->id)->get()
        ];
        return view('masyarakat.dashboard', $dataParsing);
    }

    //menyimpan file
    public function simpan_file(Request $request)
    {
        $filename = pathinfo($request->filePengaduan, PATHINFO_FILENAME);

        $extension = $request->filePengaduan->getClientOriginalExtension();
        $namafoto = 'gallery' . time() . '.' . $extension;
        $request->filePengaduan->move('gallery', $namafoto);

        $datasimpan = [
            'users_id' => auth()->user()->id,
            'kategori_id' => $request->kategori,
            'judul_pengaduan' => $request->judul_pengaduan,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $namafoto
        ];
        Pengaduan::create($datasimpan);
        return redirect('/dashboard');
    }


    //menampilkan hal detail
    public function detail($id)
    {
        $detailpengaduan = Pengaduan::with(['kategori'])->where('id', $id)->first();
        $tanggapan = Tanggapan::where('pengaduan_id', $id)->get();
        return view('masyarakat.detail', compact('detailpengaduan', 'tanggapan'));
    }


    //kirim tanggapan
    public function kirim_tanggapan_masyarakat(Request $request)
    {
        $tanggapanMasyarakat = [
            'tanggapan' => $request->input('tanggapan'),
            'pengaduan_id' => $request->input('pengaduan_id'),
            'users_id' => Auth::id()
        ];
        Tanggapan::create($tanggapanMasyarakat);
        return redirect()->back()->with('success', 'berhasil menanggapi');
    }
}
