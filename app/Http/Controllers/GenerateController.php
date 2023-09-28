<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class GenerateController extends Controller
{
    public function generate_laporan()
    {

        $rekap = Pengaduan::with('kategori')->orderBy('id', 'desc')->get();
        return view('admin.generate-laporan', compact('rekap'));
    }
}
