<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GenerateController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('masyarakat')->group(function () {
    //tambah data
    Route::get('/add', [HomeController::class, 'add'])->name('add');
    Route::post('/simpan_file', [HomeController::class, 'simpan_file'])->name('simpan_file');
    //profile
    Route::get('profile', [HomeController::class, 'profile'])->name('profile');

    //dashboard
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    //detail
    Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');
    //profile dan update profile
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::post('/update_profile', [ProfileController::class, 'update_profile'])->name('update_profile');
    //menampilkan halaman update profile
    Route::get('update', [ProfileController::class, 'update'])->name('update');
    //menampilkan halaman update password
    Route::get('/update_password', [ProfileController::class, 'update_password'])->name('update_password');
    Route::post('/password', [ProfileController::class, 'password'])->name('password');
    //kirim tanggapan
    Route::post('kirim_tanggapan_masyarakat', [HomeController::class, 'kirim_tanggapan_masyarakat'])->name('kirim_tanggapan_masyarakat');
    //logout untuk masyarakat
    Route::post('/logout', LogoutController::class)->name('logout');
});


//middleware ini agar si user tidak bisa balik ke login dan index sebelum logout
Route::middleware('guest')->group(function () {
    //halaman utama web

    Route::get('/index', [HomeController::class, 'index'])->name('index');
    //login user
    Route::get('/log', [HomeController::class, 'log'])->name('login');
    Route::post('/login', [LoginController::class, 'ceklogin']);


    //register user
    Route::get('/registrasi', [HomeController::class, 'registrasi'])->name('registrasi');
    Route::post('/register', [RegisterController::class, 'register']);


    //login admin
    Route::get('/login_admin', [AdminController::class, 'login_admin'])->name('login_admin');
    Route::post('/check_login_admin', [AdminController::class, 'check_login_admin'])->name('check_login_admin');
});


Route::middleware('admin')->group(function () {
    //menampilkan halaman dashboard admin
    Route::get('/dashboard_admin', [AdminController::class, 'dashboard_admin'])->name('dashboard_admin');

    Route::post('/kirim_tanggapan', [AdminController::class, 'kirim_tanggapan'])->name('kirim_tanggapan');
    //menampilkan halaman masyarakat
    Route::get('/masyarakat', [AdminController::class, 'masyarakat'])->name('masyarakat');
    //menambahkan data masyarakat
    Route::get('/add_masyarakat', [AdminController::class, 'add_masyarakat'])->name('add_masyarakat');
    Route::post('/masyarakat_add', [AdminController::class, 'masyarakat_add'])->name('masyarakat_add');
    //menampilkan kategori pengaduan
    Route::get('/kategori_pengaduan', [AdminController::class, 'kategori_pengaduan'])->name('kategori_pengaduan');
    //menambahkan kategori
    Route::get('/add_kategori', [AdminController::class, 'add_kategori'])->name('add_kategori');
    Route::post('/kategori', [AdminController::class, 'kategori'])->name('kategori');
    //menampilkan halaman pegawai
    Route::get('/pegawai', [AdminController::class, 'pegawai'])->name('pegawai');
    //menambahkan pegawai
    Route::get('/add_pegawai', [AdminController::class, 'add_pegawai'])->name('add_pegawai');
    Route::post('/tambah_petugas', [AdminController::class, 'tambah_petugas'])->name('tambah_petugas');
    //menampilkan halaman laporan masuk
    Route::get('/laporan_masuk', [AdminController::class, 'laporan_masuk'])->name('laporan_masuk');
    //menampilkan halaman generate laporan
    Route::get('/generate_laporan', [GenerateController::class, 'generate_laporan'])->name('generate_laporan');
    //profile admin
    Route::get('/profile_admin', [ProfileController::class, 'profile_admin'])->name('profile_admin');
    Route::post('/update_profile_admin', [ProfileController::class, 'update_profile_admin'])->name('update_profile_admin');
    //menampilkan halaman update profile
    Route::get('tampil_profile_admin', [ProfileController::class, 'tampil_profile_admin'])->name('tampil_profile_admin');
    //menampilkan halaman update password
    // Route::post('/update_password', [ProfileController::class, 'update_password'])->name('update_password');
    Route::get('/password_admin', [ProfileController::class, 'password_admin'])->name('password_admin');
    Route::post('/update_password_admin', [ProfileController::class, 'update_password_admin'])->name('update_password_admin');
    //tanggapan
    Route::get('/tanggapan', [AdminController::class, 'tanggapan'])->name('tanggapan');
    Route::post('/kirim_tanggapan_admin', [AdminController::class, 'kirim_tanggapan_admin'])->name('kirim_tanggapan_admin');
    Route::get('/detail_masyarakat/{id}', [AdminController::class, 'detail_masyarakat'])->name('detail_masyarakat');
    //ubah status
    Route::post('/ubah_status/{id}', [AdminController::class, 'ubah_status'])->name('ubah_status');

    //generate rekap
    Route::get('/rekap_report', [GenerateController::class, 'rekap_report'])->name('rekap_report');


    //logout
    Route::post('/logout_admin', LogoutController::class)->name('logout_admin');
});




//middleware untuk petugas
Route::middleware(['petugas'])->group(function () {
    //dashboard petugas
    Route::get('/dashboard_petugas', [PetugasController::class, 'dashboard_petugas'])->name('dashboard_petugas');
    //laporan masuk dari pengaduan
    Route::get('/laporan_masuk_tugas', [PetugasController::class, 'laporan_masuk_petugas'])->name('laporan_masuk_petugas');
    //profile petugas
    Route::get('/profile_petugas', [ProfileController::class, 'profile_petugas'])->name('profile_petugas');
    Route::post('/update_profile_petugas', [ProfileController::class, 'update_profile_petugas'])->name('update_profile_petugas');
    //logout petugas
    Route::post('/logout_petugas', LogoutController::class)->name('logout_petugas');
});
