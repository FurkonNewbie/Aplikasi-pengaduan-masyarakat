<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kategori;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //menampilkan halaman dashboard admin
    public function dashboard_admin()
    {

        $dataMasyarakat = Pengaduan::orderBy('id', 'DESC')->get();
        $jumlahDataMasyarakat = count($dataMasyarakat);
        $masyarakatCount = User::where('role', 'masyarakat')->count();
        $laporanMasuk = Pengaduan::where('status', 'new')->count();
        $kategoriPengaduan = Kategori::all()->count();
        return view('admin.dashboard_admin', compact('dataMasyarakat', 'jumlahDataMasyarakat', 'masyarakatCount', 'laporanMasuk', 'kategoriPengaduan'));
    }
    // //searching
    // public function search(Request $request)
    // {
    //     $dataMasyarakat = Pengaduan::orderBy('id', 'DESC')->get();
    //     $jumlahDataMasyarakat = count($dataMasyarakat);
    //     $masyarakatCount = User::where('role', 'masyarakat')->count();
    //     $laporanMasuk = Pengaduan::where('status', 'new')->count();
    //     $kategoriPengaduan = Kategori::all()->count();

    //     return view('admin.dashboard_admin', compact('data', 'search', 'dataMasyarakat', 'jumlahDataMasyarakat', 'masyarakatCount', 'laporanMasuk', 'kategoriPengaduan'));
    // }


    //menampilkan halaman admin
    public function login_admin()
    {
        return view('admin.login_admin');
    }


    //mengecek ketika user sudah menginputkan email dan password yang sama
    public function check_login_admin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (auth()->user()->role == 'Admin') {
                return redirect('/dashboard_admin')->with('success', 'anda berhasil login sebagai admin');
            } else {
                return redirect('/dashboard_petugas')->with('success', 'anda berhasil login sebagai petugas');
            }
        } else {
            return redirect('login_admin')->with('error', 'gagal login!');
        }
    }


    //menampilkan halaman masyarakat
    public function masyarakat()
    {
        $masyarakat =  User::where('role', 'masyarakat')->orderBy('id', 'DESC')->get();
        return view('admin.masyarakat', compact('masyarakat'));
    }


    //menampilkan halaman menambahkan data masyarakat
    public function add_masyarakat()
    {
        return view('admin.add-masyarakat');
    }


    //menambahkan data masyarakat
    public function masyarakat_add(Request $request)
    {
        $add = User::create($request->all());
        return redirect('/masyarakat')->with('success', 'berhasil menambahkan data masyarakat');
    }


    //menampilkan halaman kategori pengaduan
    public function kategori_pengaduan()
    {
        $kategori = Kategori::orderBy('id', 'DESC')->get();
        return view('admin.kategori-pengaduan', compact('kategori'));
    }


    //menampilkan halaman menambahkan kategori
    public function add_kategori()
    {
        return view('admin.add-kategori');
    }


    //menampilkan halaman pegawai
    public function pegawai()
    {
        $petugas = User::where('role', 'petugas')->orderBy('id', 'DESC')->get();
        return view('admin.pegawai', compact('petugas'));
    }


    //menampilkan halaman menambahkan data pegawai
    public function add_pegawai()
    {
        return view('admin.add-pegawai');
    }


    //menambahkan data petugas
    public function tambah_petugas(Request $request)
    {

        $user = User::create($request->all());
        $user->setRole('Petugas'); // Atau 'Admin' sesuai kebutuhan
        $user->save();
        return redirect('/pegawai')->with('success', 'berhasil menambahkan petugas');
    }


    //menampilkan halaman laporan masuk
    public function laporan_masuk()
    {
        $laporan =   Pengaduan::with(['kategori', 'user'])->orderBy('id', 'desc')->get();
        return view('admin.laporan-masuk', compact('laporan'));
    }


    //menampilkan halaman generate laporan
    public function generate_laporan()
    {
        $jumlahPengaduan = Pengaduan::with(['kategori', 'user'])->orderBy('id', 'desc')->get();
        return view('admin.generate-laporan', compact('jumlahPengaduan'));
    }


    public function kategori(Request $request)
    {
        Kategori::create($request->all());
        return redirect('/kategori_pengaduan')->with('success', 'berhasil menambahkan kategori');
    }


    //nemampilkan halaman tanggapan
    public function tanggapan()
    {
        $pengaduan = Pengaduan::all();
        $masyarakat = User::where('role', 'Masyarakat')->get();
        return view('admin.tanggapan', compact('pengaduan', 'masyarakat'));
    }


    // kirim tanggapan
    // public function kirim_tanggapan(Request $request)
    // {
    //     $datasimpan = [
    //         'users_id' => auth()->user()->id,
    //         'pengaduan_id' => $request->pengaduan_id,
    //         'tanggapan' => $request->tanggapan

    //     ];
    //     Tanggapan::create($datasimpan);
    //     return redirect('/tanggapan')->with('success', 'berhasil menanggapi');
    // }


    //menampilkan detail masyarakat di dashboard admin
    public function detail_masyarakat($id)
    {
        $detail = Pengaduan::with(['user'])->find($id);
        $tanggapan = Tanggapan::where('pengaduan_id', $id)->get();
        return view('admin.detail_masyarakat', compact('detail', 'tanggapan'));
    }

    
    public function kirim_tanggapan_admin(Request $request)
    {
        $tanggapan = [
            'tanggapan' => $request->input('tanggapan'),
            'pengaduan_id' => $request->input('pengaduan_id'),
            'users_id' => Auth::id()
        ];

        Tanggapan::create($tanggapan);
        return redirect()->back()->with('success', 'berhasil menanggapi');
    }


    public function ubah_status(Request $request, $id)
    {
        $statusupdate = Pengaduan::find($id);
        $statusupdate->update([
            'status' => $request->status
        ]);
        $statusupdate->save();
        return redirect('/dashboard_admin')->with('success', 'berhasil mengubah status');
    }
}
