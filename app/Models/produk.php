<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    public $timestamps = false;
    protected $table = 'produk'; // Nama tabel

    protected $fillable = [
        'nama_produk',
        'gambar',
        'deskripsi',
        'harga',
        'kategori',
        //'is_diskon',
    ];
}
