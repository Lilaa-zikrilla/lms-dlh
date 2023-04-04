<?php

namespace App\Http\Controllers;

use App\Models\Kerjasama_Model;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Kerjasama extends Controller
{
    public function index()
    {
        $str   = Str::class;
        $kerjasama = Kerjasama_Model::orderBy('id', 'desc')->get();
        $datetime = Kerjasama_Model::select('publish')->get();

        $current = Carbon::now();
        $dt      = Carbon::yesterday();
        $data = [
            'current' => $current->diffInHours($dt),
        ];

        return view('pages.kerjasama_kampus', compact('kerjasama', 'str', 'data'));
    }

    public function show($slug_kerjasama)
    {
        $kerjasama = Kerjasama_Model::where('slug_kerjasama', $slug_kerjasama)->first();

        return view('pages.kerjasama_kampus_detail', compact('kerjasama'));
    }
}
