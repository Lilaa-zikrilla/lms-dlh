<?php

namespace App\Http\Controllers;

use App\Models\Prestasi_model;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PrestasiMahasiswa extends Controller
{
    public function index()
    {
        $str   = Str::class;
        $prestasi = Prestasi_model::orderBy('id', 'desc')->get();
        $datetime = Prestasi_model::select('publish')->get();

        $current = Carbon::now();
        $dt      = Carbon::yesterday();
        $data = [
            'current' => $current->diffInHours($dt),
        ];

        return view('pages.prestasi_mahasiswa', compact('prestasi', 'str', 'data'));
    }

    public function show($slug_prestasi)
    {
        $prestasi = Prestasi_model::where('slug_prestasi', $slug_prestasi)->first();
        $prestasi_populer = Prestasi_model::orderBy('id', 'desc')->take(4)->get();

        return view('pages.prestasi_mahasiswa_detail', compact('prestasi', 'prestasi_populer'));
    }
}
