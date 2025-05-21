<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
  public $timestamps = false;
  protected $table = 'layanan'; // Nama tabel

  protected $fillable = [
    'gambar',
    'kategori',
  ];
}
