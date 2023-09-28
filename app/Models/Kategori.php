<?php

namespace App\Models;

use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;  

    //disamakan fieldnya berdasarkan tabel dalam database
    protected $fillable = [
        'nama_kategori',
        'deskripsi'
    ];

    //agar konek dengan tabel di database
    protected $table = 'kategori';

    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class, 'kategori_id', 'id');
    }
}
