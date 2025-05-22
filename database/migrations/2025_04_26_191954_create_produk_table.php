<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('produk', function (Blueprint $table) {
      $table->id();
      $table->string('nama_produk');
      $table->string('gambar');
      $table->integer('harga');
      $table->integer('harga_diskon')->nullable()->default(null);
      $table->enum('kategori', [
        'Sein',
        'Lampu Depan',
        'Lampu Belakang',
        'Spakbor',
        'Keranjang',
        'Tangki',
        'Footstep'
      ])->nullable();
      $table->boolean('is_diskon')->default(false);
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('produk');
  }
};
