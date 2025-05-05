<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'nama_produk' => 'Produk 1',
                'gambar' => 'images/produk1.jpg',
                'deskripsi' => 'Ini Deskripsi Produk 1.',
                'harga' => 50000,
                'kategori' => 'Sein',
                'is_diskon' => false,
            ],
            [
                'nama_produk' => 'Produk 2',
                'gambar' => 'images/produk2.jpeg',
                'deskripsi' => 'Ini Deskripsi Produk 2.',
                'harga' => 75000,
                'kategori' => 'Lampu Depan',
                'is_diskon' => true,
            ],
            [
                'nama_produk' => 'Produk 1',
                'gambar' => 'images/produk1.jpg',
                'deskripsi' => 'Ini Deskripsi Produk 1.',
                'harga' => 50000,
                'kategori' => 'Sein',
                'is_diskon' => false,
            ],
            [
                'nama_produk' => 'Produk 1',
                'gambar' => 'images/produk1.jpg',
                'deskripsi' => 'Ini Deskripsi Produk 1.',
                'harga' => 50000,
                'kategori' => 'Sein',
                'is_diskon' => false,
            ],
            [
                'nama_produk' => 'Produk 1',
                'gambar' => 'images/produk1.jpg',
                'deskripsi' => 'Ini Deskripsi Produk 1.',
                'harga' => 50000,
                'kategori' => 'Sein',
                'is_diskon' => false,
            ],
            [
                'nama_produk' => 'Produk 1',
                'gambar' => 'images/produk1.jpg',
                'deskripsi' => 'Ini Deskripsi Produk 1.',
                'harga' => 50000,
                'kategori' => 'Sein',
                'is_diskon' => false,
            ],
        ];

        foreach ($products as $produk) {
            Produk::create($produk);
        }
    }
}
