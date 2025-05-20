<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\layanan;

class LayananSeeder extends Seeder
{

    public function run(): void
    {
        $service = [
            [
                'gambar' => 'motor8.jpg',
                'kategori' => 'Modification',
            ], 
            [
                'gambar' => 'sparepart11.jpg',
                'kategori' => 'Spareparts',
            ], 
            [
                'gambar' => 'resto41.jpg',
                'kategori' => 'Restoration',
            ],
            [
                'gambar' => 'sparepart7.jpg',
                'kategori' => 'Spareparts',
            ],
            [
                'gambar' => 'modif1.jpg',
                'kategori' => 'Modification',
            ],
            [
                'gambar' => 'resto1.jpg',
                'kategori' => 'Restoration',
            ],
            [
                'gambar' => 'sparepart2.jpg',
                'kategori' => 'Spareparts',
            ],
            [
                'gambar' => 'sparepart3.jpg',
                'kategori' => 'Spareparts',
            ],
            [
                'gambar' => 'motor1.1.jpg',
                'kategori' => 'Modification',
            ],
            [
                'gambar' => 'motor4.jpg',
                'kategori' => 'Modification',
            ],
            [
                'gambar' => 'sparepart4.jpg',
                'kategori' => 'Spareparts',
            ],
            [
                'gambar' => 'sparepart5.jpg',
                'kategori' => 'Spareparts',
            ],
            [
                'gambar' => 'motor2.png',
                'kategori' => 'Modification',
            ],
            [
                'gambar' => 'motor3.jpg',
                'kategori' => 'Modification',
            ],
            [
                'gambar' => 'sparepart6.jpg',
                'kategori' => 'Spareparts',
            ],
            [
                'gambar' => 'motor7.jpg',
                'kategori' => 'Modification',
            ],
            [
                'gambar' => 'sparepart8.jpg',
                'kategori' => 'Spareparts',
            ],
            [
                'gambar' => 'stang.jpeg',
                'kategori' => 'Spareparts',
            ],
            [
                'gambar' => 'modif3.jpg',
                'kategori' => 'Modification',
            ],
            [
                'gambar' => 'resto2.jpg',
                'kategori' => 'Restoration',
            ],
            [
                'gambar' => 'motor6.jpg',
                'kategori' => 'Restoration',
            ],
            [
                'gambar' => 'resto3.jpg',
                'kategori' => 'Restoration',
            ],
            [
                'gambar' => 'motor9.jpg',
                'kategori' => 'Restoration',
            ],
            [
                'gambar' => 'resto5.jpg',
                'kategori' => 'Restoration',
            ],
            [
                'gambar' => 'resto6.jpg',
                'kategori' => 'Restoration',
            ],
            [
                'gambar' => 'motor5.jpg',
                'kategori' => 'Restoration',
            ],
            [
                'gambar' => 'resto7.jpg',
                'kategori' => 'Restoration',
            ],
            [
                'gambar' => 'motor11.jpg',
                'kategori' => 'Modification',
            ],
            [
                'gambar' => 'sparepart9.jpg',
                'kategori' => 'Spareparts',
            ],
            [
                'gambar' => 'motor12.jpg',
                'kategori' => 'Modification',
            ],
            [
                'gambar' => 'sparepart10.jpg',
                'kategori' => 'Spareparts',
            ],
            
        ];
        foreach ($service as $layanan) {
            Layanan::create($layanan);
        }
}
}