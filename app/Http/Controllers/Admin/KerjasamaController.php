<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Kerjasama_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class KerjasamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kerjasama = Kerjasama_Model::all();
        return view('admin.kerjasama.index', compact('kerjasama'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kerjasama.add');
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
            'nama_kerjasama' => 'required',
            'isi'          => 'required',
            'user_id'        => 'required',
            'gambar'          => 'required|file|mimes:jpeg,png,jpg|max:2024',
        ]);

        $slug_kerjasama = Str::slug($request->nama_kerjasama, '-');
        $gambar = $request->gambar;
        $new_gambar = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . '_' . $gambar->getClientOriginalName();

        $data = $request->all();
        $data['slug_kerjasama'] = $slug_kerjasama;
        $data['publish'] = date('Ymd');
        $data['gambar'] = 'images/kerjasama/' . $new_gambar;

        $gambar->storeAs('public/images/kerjasama', $new_gambar);
        Kerjasama_Model::create($data);



        return redirect('admin/kerjasama')->with('success', 'Berhasil menambahkan data Kerjasama baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kerjasama_Model $id)
    {
        $id = Crypt::decrypt($id);
        $kegiatan = $id;
        return view('admin.kerjasama.details', compact('kerjasama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kerjasama_Model $kerjasama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan_Model  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kerjasama_Model $kerjasama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan_Model  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kerjasama_Model $id)
    {
        $filename = $id->gambar;
        Storage::disk('public')->delete($filename);
        $id->delete();

        return redirect()->route('kerjasama.index')->with('error', 'Data kegiatan berhasil dihapus');
    }
}
