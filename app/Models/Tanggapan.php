<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tanggapan extends Model
{
    use HasFactory;

    //samakan dengan tabel tanggapan di db
    protected $fillable =  [
        'users_id',
        'pengaduan_id',
        'tanggapan'
    ];

    protected $table = 'tanggapan';

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class, 'pengaduan_id', 'id');
    }
    //relasi balik ke users
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
