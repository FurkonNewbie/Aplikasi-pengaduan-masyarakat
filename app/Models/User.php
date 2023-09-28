<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'nama',
        'email',
        'password',
        'no_telepon',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //bcrypt password
    public function setPasswordAttribute($password)
    {
        return $this->attributes['password'] = bcrypt($password);
    }

    //relasi ke dalam tabel pengaduan
    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class, 'users_id', 'id');
    }

    //relasi ke tanggapan
    public function tanggapan()
    {
        return $this->hasMany(Tanggapan::class, 'users_id', 'id');
    }
    //set role
    public function setRole($role)
    {
        $this->attributes['role'] = $role;
    }
}
