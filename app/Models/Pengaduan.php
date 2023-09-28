<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kategori;
use App\Models\Tanggapan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengaduan extends Model
{
    use HasFactory;

    //untuk mengsi data kolom
    protected $fillable = [
        'users_id',
        'kategori_id',
        'judul_pengaduan',
        'isi_laporan',
        'foto',
        'status'
    ];

    //untuk menghubungkan ke tabel dalam database
    protected $table = 'pengaduan';

    //relasi nilai balik ke tabel kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    //ke tabel users
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    //ke tabel tanggapan
    public function tanggapan()
    {
        return $this->hasMany(Tanggapan::class, 'pengaduan_id', 'id');
    }
}
