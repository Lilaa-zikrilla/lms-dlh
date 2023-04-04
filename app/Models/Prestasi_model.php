<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi_model extends Model
{
    use HasFactory;
    protected $fillable = ['nama_prestasi', 'slug_prestasi', 'isi', 'user_id', 'publish', 'gambar'];

    protected $table = 'prestasi';
}
