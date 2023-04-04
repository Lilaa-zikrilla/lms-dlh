<?php

namespace App\Http\Controllers;

use App\Models\Berita_Model;
use App\Models\Motivasi;
use App\Models\Arsip_Model;

class Arsip extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $arsip = Arsip_model::orderBy('id', 'desc')->paginate(5);
        $berita = Berita_Model::orderBy('id', 'desc')->take(3)->get();

        return view('pages.arsip', compact('arsip', 'berita'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug_arsip)
    {
        $motivasi = Motivasi::orderBy('id','desc')->take(4)->get();
        $read = Arsip_Model::where('slug_arsip', $slug_arsip)->first();

        $data = [
            'view' => $read->view + 1
        ];

        $read->update($data);

        return view('pages.arsip_detail', compact('read','motivasi'));
    }
}
