<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerjasama_Model extends Model
{
    use HasFactory;
     protected $fillable = ['nama_kerjasama', 'slug_kerjasama', 'isi', 'user_id', 'publish', 'gambar'];

    protected $table = 'kerjasama';
}
