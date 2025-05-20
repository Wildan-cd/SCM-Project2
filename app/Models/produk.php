<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    public $timestamps = false;
    protected $table = 'produk';

    protected $fillable = [
        'nama_produk',
        'gambar',
        'harga',
        'harga_diskon',
        'kategori',
        'is_diskon',
    ];
}
