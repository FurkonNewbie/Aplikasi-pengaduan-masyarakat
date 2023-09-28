<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /** PROFILE UNTUK MASYARAKAT */
    public function profile()
    {
        $profile = User::where('id', auth()->user()->id)->first();
        return view('masyarakat.profile', compact('profile'));
    }
    //post
    public function update_profile(Request $request)
    {
        $dataUpdate =  [
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
        ];
        //proses update
        User::where('id', auth()->user()->id)->update($dataUpdate);
        return redirect('/profile')->with('success', 'profile berhasil diperbarui');
    }
    //get
    public function update()
    {
        $profile = User::where('id', auth()->user()->id)->first();
        return view('masyarakat.update-profile', compact('profile'));
    }
    //get
    public function update_password()
    {
        return view('masyarakat.update-password');
    }
    //post
    public function password(Request $request)
    {
        $ubahPassword = [
            'password' => bcrypt($request->password)
        ];
        //proses update
        User::where('id', auth()->user()->id)->update($ubahPassword);
        return redirect('/profile')->with('success', 'password berhasil diperbarui');
    }
    /** PROFILE UNTUK ADMIN */
    public function profile_admin()
    {
        $profileAdmin = User::where('id', auth()->user()->id)->first();
        return view('admin.profile', compact('profileAdmin'));
    }

    public function update_profile_admin(Request $request)
    {
        $dataUpdate =  [
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
        ];
        //proses update
        User::where('id', auth()->user()->id)->update($dataUpdate);
        return redirect('/profile_admin')->with('success', 'profile berhasil diperbarui');
    }
    public function update_password_admin(Request $request)
    {
        $ubahPassword = [
            'password' => bcrypt($request->password)
        ];
        //proses update
        User::where('id', auth()->user()->id)->update($ubahPassword);
        return redirect('/profile_admin')->with('success', 'password berhasil diperbarui');
    }
    public function tampil_profile_admin()
    {
        $profile = User::where('id', auth()->user()->id)->first();
        return view('admin.update-profile', compact('profile'));
    }
    public function password_admin()
    {
        return view('admin.update-password');
    }
    /** PROFILE UNTUK PETUGAS */
    public function profile_petugas()
    {
        $profilePetugas = User::where('id', auth()->user()->id)->first();
        return view('petugas.profile', compact('profilePetugas'));
    }
    public function update_profile_petugas(Request $request)
    {
        $dataUpdate =  [
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
        ];
        //proses update
        User::where('id', auth()->user()->id)->update($dataUpdate);
        return redirect('/profile_petugas')->with('success', 'profile berhasil diperbarui');
    }
}
