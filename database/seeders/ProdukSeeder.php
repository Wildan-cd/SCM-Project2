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
        'nama_produk' => 'Lampu Daymaker 5.75 Inci',
        'gambar' => 'daymaker.jpg',
        'harga' => 215000,
        'harga_diskon' => 212500,
        'kategori' => 'Lampu Depan',
        'is_diskon' => true
      ],
      [
        'nama_produk' => 'Cover Lampu Depan L2G Press Chrome Mentah 5.75 Inch',
        'gambar' => 'BatokLampuL2G.webp',
        'harga' => 70000,
        'harga_diskon' => 66900,
        'kategori' => 'Lampu Depan',
        'is_diskon' => true
      ],
      [
        'nama_produk' => 'Batok CD Set Speedometer & Lampu CD90/CD50',
        'gambar' => 'BatokCD.webp',
        'harga' => 3800000,
        'harga_diskon' => 3790000,
        'kategori' => 'Lampu Depan',
        'is_diskon' => true
      ],
      [
        'nama_produk' => 'Kupingan Lampu CNC Universal',
        'gambar' => 'lampuCNC.webp',
        'harga' => 60000,
        'harga_diskon' => null,
        'kategori' => 'Lampu Depan',
        'is_diskon' => false
      ],
      [
        'nama_produk' => 'Kupingan Lampu Stainless CB',
        'gambar' => 'lampuCB.jpg',
        'harga' => 105600,
        'harga_diskon' => 103100,
        'kategori' => 'Lampu Depan',
        'is_diskon' => true
      ],
      [
        'nama_produk' => 'Kupingan Lampu CNC Aluminium As 33mm',
        'gambar' => 'kupinganCNC.jpg',
        'harga' => 50000,
        'harga_diskon' => null,
        'kategori' => 'Lampu Depan',
        'is_diskon' => false
      ],
      [
        'nama_produk' => 'Batok Lampu Depan CB125 Full Press Chrome Mentah',
        'gambar' => 'BatokLampuCB125.webp',
        'harga' => 115000,
        'harga_diskon' => 112500,
        'kategori' => 'Lampu Depan',
        'is_diskon' => true
      ],
      [
        'nama_produk' => 'Kupingan Lampu Tralis CNC Chrome',
        'gambar' => 'lampuTralis.jpg',
        'harga' => 21450,
        'harga_diskon' => null,
        'kategori' => 'Lampu Depan',
        'is_diskon' => false
      ],
      [
        'nama_produk' => 'Lampu Sein CB Model Diamond',
        'gambar' => 'seinCB.webp',
        'harga' => 55000,
        'harga_diskon' => null,
        'kategori' => 'Sein',
        'is_diskon' => false
      ],
      [
        'nama_produk' => 'Stoplamp Belakang GL100',
        'gambar' => 'stoplampGL100.webp',
        'harga' => 80000,
        'harga_diskon' => null,
        'kategori' => 'Sein',
        'is_diskon' => false
      ],
      [
        'nama_produk' => 'Manisan Sein CB',
        'gambar' => 'manisanCB.jpg',
        'harga' => 65000,
        'harga_diskon' => 60000,
        'kategori' => 'Sein',
        'is_diskon' => true
      ],
      [
        'nama_produk' => 'Manisan Sein GL PRO CNC',
        'gambar' => 'manisanCL.webp',
        'harga' => 35000,
        'harga_diskon' => null,
        'kategori' => 'Sein',
        'is_diskon' => false
      ],
      [
        'nama_produk' => 'Lampu Sein LED Stainless CB',
        'gambar' => 'ledStainless.jpg',
        'harga' => 205000,
        'harga_diskon' => null,
        'kategori' => 'Sein',
        'is_diskon' => false
      ],
      [
        'nama_produk' => 'Kepetan Selebor Belakang GL100',
        'gambar' => 'SeleborBelakangGL100.webp',
        'harga' => 20000,
        'harga_diskon' => null,
        'kategori' => 'Spakbor',
        'is_diskon' => false
      ],
      [
        'nama_produk' => 'Slebor Depan Ninja RR Import WIN',
        'gambar' => 'SleborNinja.jpg',
        'harga' => 80000,
        'harga_diskon' => null,
        'kategori' => 'Spakbor',
        'is_diskon' => false
      ],
      [
        'nama_produk' => 'Selebor Belakang CB Pres Nganjuk Chrome/Mentah',
        'gambar' => 'SeleborBelakangCB.jpg',
        'harga' => 600000,
        'harga_diskon' => 594000,
        'kategori' => 'Spakbor',
        'is_diskon' => true
      ],
      [
        'nama_produk' => 'Selebor Tengah GL100 Plastik ABS',
        'gambar' => 'SeleborTengahGL100.jpg',
        'harga' => 65000,
        'harga_diskon' => 60000,
        'kategori' => 'Spakbor',
        'is_diskon' => true
      ],
      [
        'nama_produk' => 'Spakbor Slebor Depan Belakang Japstyle',
        'gambar' => 'SleborJapstyle.jpg',
        'harga' => 50000,
        'harga_diskon' => null,
        'kategori' => 'Spakbor',
        'is_diskon' => false,
      ],
      [
        'nama_produk' => 'Stoplamp Bening Belakang GL100/GL125/Win100/Supercup C700 C800',
        'gambar' => 'stoplampSupercup.jpg',
        'harga' => 44900,
        'harga_diskon' => 42900,
        'kategori' => 'Lampu Belakang',
        'is_diskon' => true,
      ],
      [
        'nama_produk' => 'Braket Stoplamp Belakang Yamaha V80',
        'gambar' => 'pangkonV80.jpg',
        'harga' => 55000,
        'harga_diskon' => 50000,
        'kategori' => 'Lampu Belakang',
        'is_diskon' => true,
      ],
      [
        'nama_produk' => 'Stoplamp Belakang CB Model BSA LED Smoke',
        'gambar' => 'stoplampCBBSA.jpg',
        'harga' => 100000,
        'harga_diskon' => 94200,
        'kategori' => 'Lampu Belakang',
        'is_diskon' => true,
      ],
      [
        'nama_produk' => 'Stoplamp Belakang CB Monkey TAKEGAWA',
        'gambar' => 'takegawa.jpg',
        'harga' => 99000,
        'harga_diskon' => 94050,
        'kategori' => 'Lampu Belakang',
        'is_diskon' => true,
      ],
      [
        'nama_produk' => 'Set Lampu Belakang GL100/Win',
        'gambar' => 'setPangkonSein.jpg',
        'harga' => 80000,
        'harga_diskon' => null,
        'kategori' => 'Lampu Belakang',
        'is_diskon' => false,
      ],
      [
        'nama_produk' => 'Mika Stoplamp GL PRO MAX',
        'gambar' => 'mikaStoplamp.jpg',
        'harga' => 40000,
        'harga_diskon' => 35800,
        'kategori' => 'Lampu Belakang',
        'is_diskon' => true,
      ],
      [
        'nama_produk' => 'Bohlam Stoplamp Projie LED Mini',
        'gambar' => 'bohlamProjie.jpg',
        'harga' => 30000,
        'harga_diskon' => null,
        'kategori' => 'Lampu Belakang',
        'is_diskon' => false,
      ],
      [
        'nama_produk' => 'Keranjang Tengah F1ZR / FIZR',
        'gambar' => 'fizr.jpg',
        'harga' => 132800,
        'harga_diskon' => 114500,
        'kategori' => 'Keranjang',
        'is_diskon' => true,
      ],
      [
        'nama_produk' => 'Rak Jepit Tengah Jepret Honda Astrea',
        'gambar' => 'rakJepitTengah.webp',
        'harga' => 114000,
        'harga_diskon' => 111500,
        'kategori' => 'Keranjang',
        'is_diskon' => true,
      ],
      [
        'nama_produk' => 'Adaptor Footstep Belakang CB K15/K45, CBR650F, CB500, Revo, Sonic',
        'gambar' => 'adaptor.jpg',
        'harga' => 35000,
        'harga_diskon' => null,
        'kategori' => 'Footstep',
        'is_diskon' => false,
      ],
      [
        'nama_produk' => 'Footstep Belakang CB650F / CBR650',
        'gambar' => 'cb650f.webp',
        'harga' => 153400,
        'harga_diskon' => null,
        'kategori' => 'Footstep',
        'is_diskon' => false,
      ],
      [
        'nama_produk' => 'Tutup Tangki CB/GL/Win Model Indikator Bensin (S90, GL100, Helibars)',
        'gambar' => 'unggulan3.jpg',
        'harga' => 172985,
        'harga_diskon' => 170000,
        'kategori' => 'Tangki',
        'is_diskon' => true,
      ],
      [
        'nama_produk' => 'Tutup Tangki Honda GL100 GL125',
        'gambar' => 'tutupTangkiGL100.jpg',
        'harga' => 55500,
        'harga_diskon' => null,
        'kategori' => 'Tangki',
        'is_diskon' => false,
      ],
      [
        'nama_produk' => 'Karet Dudukan Tangki CB / GL100 / GL PRO MAX',
        'gambar' => 'karetTangkiGL100.webp',
        'harga' => 20000,
        'harga_diskon' => null,
        'kategori' => 'Tangki',
        'is_diskon' => false,
      ],
      [
        'nama_produk' => 'Tutup Tangki Slim CB / S90Z',
        'gambar' => 'tutupTangkiSlim.jpg',
        'harga' => 45000,
        'harga_diskon' => null,
        'kategori' => 'Tangki',
        'is_diskon' => false,
      ],
      [
        'nama_produk' => 'Tangki CB125 Full Press',
        'gambar' => 'tangkiCB125.webp',
        'harga' => 455000,
        'harga_diskon' => 447500,
        'kategori' => 'Tangki',
        'is_diskon' => true,
      ],
      [
        'nama_produk' => 'Emblem Logo Tangki CB100',
        'gambar' => 'emblemTangkiCB100.jpg',
        'harga' => 90000,
        'harga_diskon' => 87400,
        'kategori' => 'Tangki',
        'is_diskon' => true,
      ],
      [
        'nama_produk' => 'EmblemTangki CB125',
        'gambar' => 'emblemTangkiCB125.webp',
        'harga' => 95000,
        'harga_diskon' => 65852,
        'kategori' => 'Tangki',
        'is_diskon' => true,
      ],
      [
        'nama_produk' => 'Tangki GL100 / GL125 Full Press',
        'gambar' => 'tangkiGL100.png',
        'harga' => 513800,
        'harga_diskon' => 470196,
        'kategori' => 'Tangki',
        'is_diskon' => true,
      ],
      [
        'nama_produk' => 'Emblem Logo Tangki CB125',
        'gambar' => 'emblemLogoTangkiCB125.jpg',
        'harga' => 95000,
        'harga_diskon' => 65000,
        'kategori' => 'Tangki',
        'is_diskon' => true,
      ],
      [
        'nama_produk' => 'Tangki CB100 Press',
        'gambar' => 'tangkiCB100.webp',
        'harga' => 349800,
        'harga_diskon' => 347300,
        'kategori' => 'Tangki',
        'is_diskon' => true,
      ]
    ];

    foreach ($products as $produk) {
      Produk::create($produk);
    }
  }
}
