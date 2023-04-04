<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Prestasi_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = Prestasi_model::all();
        return view('admin.prestasi.index', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prestasi.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_prestasi' => 'required',
            'isi'          => 'required',
            'user_id'        => 'required',
            'gambar'          => 'required|file|mimes:jpeg,png,jpg|max:2024',
        ]);

        $slug_prestasi = Str::slug($request->nama_prestasi, '-');
        $gambar = $request->gambar;
        $new_gambar = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar->getClientOriginalName();

        $data = $request->all();
        $data['slug_prestasi'] = $slug_prestasi;
        $data['publish'] = date('Ymd');
        $data['gambar'] = 'images/prestasi/' . $new_gambar;

        $gambar->storeAs('public/images/prestasi', $new_gambar);
        Prestasi_model::create($data);



        return redirect('admin/prestasi')->with('success', 'Berhasil menambahkan data Berita baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestasi  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita_Model $id)
    {
        $id = Crypt::decrypt($id);
        $prestasi = $id;
        return view('admin.pretasi.details', compact('prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestasi  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestasi_model $prestasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestasi_model  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestasi_model $prestasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestasi_model  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestasi_model $id)
    {
        $filename = $id->gambar;
        Storage::disk('public')->delete($filename);
        $id->delete();

        return redirect()->route('prestasi.index')->with('error', 'Data pengumuman berhasil dihapus');
    }
}
