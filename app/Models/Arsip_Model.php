<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class arsip_model extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['judul_arsip', 'isi', 'slug_arsip', 'view', 'tgl_publish', 'user_id', 'file'];
    protected $table = 'arsip';
    protected $dates = ['deleted_at'];

    //public function get_pengemumuman()
    public function get_arsip()
    {
        $query = DB::table('arsip')
            ->orderBy('id', 'DESC')
            ->limit(4)
            ->get();
        return $query;
    }

    //public function all_pengumuma()
    public function all_arsip()
    {
        $query1 = DB::table('arsip')
            ->orderBy('id', 'desc')
            ->get();
        return $query1;
    }
    public function get_tanggal()
    {
        $query1 = DB::table('arsip')
            ->select('tgl_publish')
            ->get();
        return $query1;
    }
}
