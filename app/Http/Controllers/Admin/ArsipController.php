<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Arsip_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Null_;

class arsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $arsip = arsip::OrderBy('kelompok', 'asc')->OrderBy('nama_mapel', 'asc')->get();
        $arsip = Arsip_Model::orderBy('id', 'DESC')->get();
        return view('admin.arsip.index', compact('arsip'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.arsip.add');
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
            'judul'         => 'required',
            'keterangan'    => 'required',
            'user_id'       => 'required',
            'file_berkas'   => 'mimes:doc,docx,pdf,txt|max:2048',
        ]);

        $slug_arsip = Str::slug($request->judul, '-');

        if ($request->file_berkas) {
            $name_file = $request->file_berkas;
            $new_file = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . "_" . $name_file->getClientOriginalName();
            Arsip_Model::create([
                'judul_arsip' => $request->judul,
                'isi' => $request->keterangan,
                'user_id' => $request->user_id,
                'slug_arsip' => $slug_arsip,
                'tgl_publish'   => date('Ymd'),
                'view'      => 1,
                'file' => 'images/arsip/' . $new_file
            ]);

            $name_file->storeAs('public/images/arsip', $new_file);
            // $name_file->move('uploads', $new_file);
        } else {
            Arsip_Model::create([
                'judul_arsip' => $request->judul,
                'isi' => $request->keterangan,
                'user_id' => $request->user_id,
                'slug_arsip' => $slug_arsip,
                'tgl_publish'   => date('Ymd'),
                'view'          => 1,
                'file'          => Null
            ]);
        }

        return redirect('admin/arsip')->with('success', 'Berhasil menambahkan data arsip baru!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function show(arsip_model $arsip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $id = Crypt::encrypt($id);
        $arsip = Arsip_Model::findorfail($id);
        return view('admin.arsip.edit', compact('arsip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul'         => 'required',
            'keterangan'    => 'required',
            'user_id'       => 'required',
            'file_berkas'   => 'mimes:jpeg,png,jpg,pdf,doc,docx,xls,xlsx,ppt,pptx|max:8024',
        ]);

        $arsip = Arsip_Model::findorfail($id);
        $slug_arsip = Str::slug($request->judul, '-');

        if ($request->file_berkas) {
            $name_file = $request->file_berkas;
            $new_file = date('s' . 'i' . 'H' . 'd' . 'm' . 'Y') . "_" . $name_file->getClientOriginalName();
            $data = [
                'judul_arsip' => $request->judul,
                'isi' => $request->keterangan,
                'user_id' => $request->user_id,
                'slug_arsip' => $slug_arsip,
                'file' => 'images/arsip/' . $new_file
            ];

            $name_file->storeAs('public/images/arsip', $new_file);
            $arsip->update($data);
        } else {
            $data = [
                'judul_arsip' => $request->judul,
                'isi' => $request->keterangan,
                'user_id' => $request->user_id,
                'slug_arsip' => $slug_arsip,
            ];

            $arsip->update($data);
        }

        return redirect()->route('arsip')->with('success', 'Data arsip berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\arsip  $arsip
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $arsip = Arsip_Model::where('id', $id);
        $arsip->Delete();
        return redirect()->route('arsip')->with('error', 'Data arsip berhasil dihapus');
    }
}
