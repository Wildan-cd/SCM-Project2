<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('ulasan', function (Blueprint $table) {
      $table->id();
      $table->string('nama', 100);
      $table->string('email', 100);
      $table->unsignedTinyInteger('rating');
      $table->text('pesan');
      $table->timestamp('tanggal')->useCurrent();
    });

    DB::statement('ALTER TABLE ulasan ADD CONSTRAINT rating_check CHECK (rating BETWEEN 1 AND 5)');
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('ulasan');
  }
};
