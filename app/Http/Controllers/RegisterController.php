<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function register(Request $request)
    {
        $alert = [
            'nama.required' => 'nama harus diisi!',
            'email.unique' => 'email sudah digunakan',
            'email.required' => 'email harus diisi!',
            'password.required' => 'password harus diisi!',
            'no_telepon.required' => 'no telepon harus diisi!',
        ];
        //validates
        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:users,email',
            'password'  => 'required',
            'no_telepon'  => 'required|max:16',
        ], $alert);

        //membuat akun baru melalui register
        User::create($request->all());
        // if (Auth::attempt([
        //     'nama' => $request->nama,
        //     'no_telepon' => $request->no_telepon,
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]));
        return redirect('registrasi')->with('success', 'berhasil registrasi');
    }
}
