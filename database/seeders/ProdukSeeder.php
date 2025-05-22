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
                'deskripsi' => 'Lampu Daymaker 5.75 inci dengan 16 LED berkualitas tinggi menghasilkan pencahayaan terang dan fokus untuk perjalanan lebih aman, siang maupun malam. Dilengkapi reflektor presisi yang meningkatkan daya sebar cahaya tanpa menyilaukan. Cocok untuk motor CB, GL, Tiger, dan berbagai jenis motor custom bergaya retro atau modern. Tahan air dan awet, ideal untuk penggunaan harian maupun touring. Desain stylish menambah kesan gagah pada tampilan depan motor Anda. Pemasangan mudah dan langsung pas (Plug and Play). Pilihan tepat untuk performa dan estetika.',
                'harga' => 215000,
                'kategori' => 'Lampu Depan',
                'is_diskon' => true
            ], 
            [
                'nama_produk' => 'Cover Lampu Depan L2G Press Chrome Mentah 5.75 Inch',
                'gambar' => 'BatokLampuL2G.webp',
                'deskripsi' => 'Cover lampu depan L2G Press ukuran 5,75 inci ini berbahan chrome mentah, ideal untuk custom finishing sesuai selera Anda. Desain Plug and Play (PNP) memungkinkan pemasangan mudah tanpa modifikasi tambahan, kompatibel dengan berbagai jenis lampu utama dan Daymaker 5.75 inci. Cocok untuk motor bergaya klasik, chopper, bobber, hingga modern retro. Memberikan kesan kokoh dan estetika bersih pada tampilan motor Anda. Pilihan tepat bagi pecinta modifikasi yang menginginkan perpaduan fungsi dan gaya dalam satu produk.',
                'harga' => 64200,
                'kategori' => 'Lampu Depan',
                'is_diskon' => true
            ],
            [
                'nama_produk' => 'Batok CD Set Speedometer & Lampu CD90/CD50',
                'gambar' => 'BatokCD.webp',
                'deskripsi' => 'Set batok dan speedometer original copotan untuk Honda CD90, CD50, dan CT125. Kondisi second (2nd) namun masih layak pakai, cocok untuk restorasi motor klasik atau proyek custom. Termasuk cover headlamp dan spidometer bawaan asli (ori), memberikan tampilan autentik khas motor jadul. Material kokoh dengan detail presisi dari produk pabrikan. Pilihan ideal bagi kolektor atau pengguna yang mengutamakan orisinalitas dan kualitas part lama. Siap pasang tanpa modifikasi berarti.',
                'harga' => 3800000,
                'kategori' => 'Lampu Depan',
                'is_diskon' => false
            ],
            [
                'nama_produk' => 'Kupingan Lampu CNC Universal',
                'gambar' => 'lampuCNC.webp',
                'deskripsi' => 'Set batok dan speedometer original copotan untuk Honda CD90, CD50, dan CT125. Kondisi second (2nd) namun masih layak pakai, cocok untuk restorasi motor klasik atau proyek custom. Termasuk cover headlamp dan spidometer bawaan asli (ori), memberikan tampilan autentik khas motor jadul. Material kokoh dengan detail presisi dari produk pabrikan. Pilihan ideal bagi kolektor atau pengguna yang mengutamakan orisinalitas dan kualitas part lama. Siap pasang tanpa modifikasi berarti.',
                'harga' => 60000,
                'kategori' => 'Lampu Depan',
                'is_diskon' => false
            ],
            [
                'nama_produk' => 'Kupingan Lampu Stainless CB',
                'gambar' => 'lampuCB.jpg',
                'deskripsi' => 'Kupingan lampu model CB berbahan stainless steel tebal dan tahan karat, dilengkapi pangkon (bracket) lampu depan model jute. Dirancang untuk as shock berukuran 31-33 mm, cocok untuk motor klasik seperti CB, GL, dan motor custom lainnya. Finishing mengkilap menambah kesan klasik dan elegan. Pemasangan mudah dan kokoh, ideal untuk restorasi atau modifikasi ringan. Solusi tepat untuk mengganti dudukan lampu lama dengan tampilan lebih bersih dan kuat.',
                'harga' => 105600,
                'kategori' => 'Lampu Depan',
                'is_diskon' => false
            ],
            [
                'nama_produk' => 'Kupingan Lampu CNC Aluminium As 33mm',
                'gambar' => 'kupinganCNC.jpg',
                'deskripsi' => 'Kupingan lampu depan berbahan aluminium CNC untuk as shock 33mm, kuat, presisi, dan tahan karat. Desain Plug and Play (PNP) memudahkan pemasangan tanpa modifikasi, cocok untuk motor Ninja, Vixion, Scorpio, dan sejenis. Dilengkapi bracket pangkon lampu yang kokoh dan stabil, mendukung tampilan motor yang lebih rapi dan sporty. Ideal untuk keperluan modifikasi, custom, atau pengganti part lama. Tampil elegan dengan bobot ringan dan daya tahan tinggi.',
                'harga' => 50000,
                'kategori' => 'Lampu Depan',
                'is_diskon' => false
            ],
            [
                'nama_produk' => 'Batok Lampu Depan CB125 Full Press Chrome Mentah',
                'gambar' => 'BatokLampuCB125.webp',
                'deskripsi' => 'Batok lampu depan model CB125 full press berbahan chrome mentah, cocok untuk motor Honda CB 125 HM24. Siap dicat atau dipoles sesuai selera, ideal untuk restorasi motor klasik maupun proyek custom. Desain presisi dengan material kokoh, memberikan tampilan retro yang autentik. Pemasangan mudah dan pas tanpa ubahan berarti. Pilihan tepat bagi pecinta motor tua yang mengutamakan orisinalitas dan gaya klasik.',
                'harga' => 115000,
                'kategori' => 'Lampu Depan',
                'is_diskon' => false
            ],
            [
                'nama_produk' => 'Kupingan Lampu Tralis CNC Chrome',
                'gambar' => 'lampuTralis.jpg',
                'deskripsi' => 'Kupingan lampu depan model tralis berbahan CNC berkualitas dengan finishing chrome mengkilap, tampil kokoh dan stylish. Dirancang khusus untuk Ninja R, DDF19, dan Vpro, dilengkapi bracket pangkon lampu yang presisi dan kuat. Desain tralis memberi kesan racing dan agresif pada tampilan motor. Pemasangan mudah (Plug and Play) tanpa perlu modifikasi berat. Cocok untuk modifikasi harian maupun full custom. Kombinasi kekuatan, fungsionalitas, dan estetika dalam satu produk.',
                'harga' => 21450,
                'kategori' => 'Lampu Depan',
                'is_diskon' => false
            ],
            [
                'nama_produk' => 'Lampu Sein CB Model Diamond',
                'gambar' => 'seinCB.webp',
                'deskripsi' => 'Lampu sein CB model diamond dengan desain elegan dan terang, cocok untuk motor CB, GL, GL100, MP, Tiger, dan motor custom lainnya. Dikenal dengan sinar yang tajam dan tampilan stylish, memberikan kesan modern pada motor klasik Anda. Lampu sein ini memiliki daya tahan tinggi, tahan terhadap cuaca ekstrem, serta pemasangan mudah dan praktis (Plug and Play). Ideal untuk modifikasi atau mengganti sein lama dengan desain yang lebih menarik dan fungsional.',
                'harga' => 55000,
                'kategori' => 'Sein',
                'is_diskon' => false
            ],
            [
                'nama_produk' => 'Stoplamp Belakang GL100',
                'gambar' => 'seinCB.webp',
                'deskripsi' => 'Stoplamp belakang GL100 dengan desain bening, dilengkapi lampu stop dan sein, memberikan pencahayaan maksimal dan tampilan modern. Set ini termasuk pangkon (bracket) dan sein, mudah dipasang pada motor GL100 dan motor sejenis. Dengan kualitas material yang kokoh dan tahan lama, produk ini siap memberikan keamanan ekstra di jalan. Desain bening memberikan kesan bersih dan stylish pada bagian belakang motor Anda, cocok untuk modifikasi atau penggantian part lama.',
                'harga' => 40000,
                'kategori' => 'Sein',
                'is_diskon' => false
            ],
            [
                'nama_produk' => 'Manisan Sein CB',
                'gambar' => 'manisanCB.jpg',
                'deskripsi' => 'Manisan sein CB dengan bracket dudukan sein belakang dan pangkon lampu riting, dirancang khusus untuk motor Honda CB. Material kokoh dan presisi, memberikan pemasangan yang mudah dan stabil. Cocok untuk mengganti dudukan sein lama atau melakukan modifikasi pada bagian belakang motor CB Anda. Menambah kesan rapi dan fungsional pada tampilan motor klasik atau custom. Pilihan tepat untuk penggemar motor retro yang mengutamakan kualitas dan kenyamanan berkendara.',
                'harga' => 60000,
                'kategori' => 'Sein',
                'is_diskon' => true
            ],
            [
                'nama_produk' => 'Manisan Sein GL PRO CNC',
                'gambar' => 'manisanCL.webp',
                'deskripsi' => 'Manisan sein GL PRO dengan dudukan riting CNC presisi, dirancang khusus untuk motor GL PRO dan GL PROMAX. Dilengkapi dengan breket dudukan sein dan pangkon reteng model kotak, memberikan tampilan kokoh dan modern pada bagian belakang motor Anda. Material CNC berkualitas tinggi memastikan daya tahan dan kestabilan. Pemasangan mudah, cocok untuk modifikasi atau penggantian dudukan sein lama dengan desain lebih rapi dan fungsional. Pilihan tepat untuk motor custom atau restorasi.',
                'harga' => 35000,
                'kategori' => 'Sein',
                'is_diskon' => false
            ],
            [
                'nama_produk' => 'Lampu Sein LED Stainless CB',
                'gambar' => 'ledStainless.jpg',
                'deskripsi' => 'Lampu sein LED CB berbahan stainless steel (stenlis) berkualitas import, tahan karat dan cocok untuk berbagai motor custom. Desain minimalis dengan sinar terang dari LED hemat daya, menggunakan kabel 2 jalur yang kompatibel dengan sistem kelistrikan standar. Cocok untuk motor CB, GL, dan modifikasi universal lainnya. Pemasangan mudah dan tampilan elegan, membuat motor Anda terlihat lebih modern tanpa menghilangkan kesan klasik. Pilihan ideal untuk pengganti sein lama dengan daya tahan dan gaya lebih baik.',
                'harga' => 50000,
                'kategori' => 'Sein',
                'is_diskon' => false
            ],
            [
                'nama_produk' => 'Kepetan Selebor Belakang GL100',
                'gambar' => 'SeleborBelakangGL100.webp',
                'deskripsi' => 'sambungan slebor belakang ini cocok untuk motor GL PRO, GL100, dan CB. Dibuat dari bahan tebal yang kuat dan tahan lama, pengerjaannya sangat rapi sehingga menambah nilai estetika motor klasik Anda. Desainnya praktis untuk menyambung kepet dan menghindari cipratan udara secara maksimal. Cocok untuk modifikasi maupun penggantian part lama. Produk ini tersedia dalam beberapa variasi, jadi silakan pilih yang sesuai kebutuhan Anda. Aksesori ini dapat meningkatkan tampilan serta fungsi motor secara signifikan.',
                'harga' => 25000,
                'kategori' =>'Spakbor',
                'is_diskon' => false
            ],
            [
                'nama_produk' => 'Slebor Depan Ninja RR Import WIN',
                'gambar' => 'SleborNinja.jpg',
                'deskripsi' => 'Spakbor depan Ninja RR ini merupakan produk impor dari merek WIN, didesain dengan presisi tinggi dan bentuk menyerupai asli pabrikan. Berbahan plastik tebal berkualitas yang kuat dan tahan lama. Warna hitam elegan dan cocok untuk berbagai tipe motor seperti Yamaha, Honda, Suzuki, maupun Kawasaki. Fleksibel dan bersifat universal, cocok digunakan pada CB, GL, Megapro, RX King, Vixion, hingga Byson. Ideal untuk modifikasi motor dengan gaya sporty atau klasik, serta memberikan proteksi maksimal terhadap cipratan udara di bagian depan.',
                'harga' => 80000,
                'kategori' =>'Spakbor',
                'is_diskon' => false
            ],
            [
                'nama_produk' => 'Selebor Belakang CB Pres Nganjuk Chrome/Mentah',
                'gambar' => 'SeleborBelakangCB.jpg',
                'deskripsi' => 'Spakbor belakang ini merupakan produk original pres Nganjuk, tersedia dalam finishing chrome dan mentah. Kualitas tinggi terlihat dari ketebalan bahan dan hasil presisi sempurna yang mengikuti bentuk rangka CB125. Finishing chrome mengkilap memberikan kesan klasik dan eksklusif. Produk ini menjadi favorit pecinta motor CB karena kemiripannya dengan versi original. Sangat cocok untuk restorasi motor klasik agar tetap autentik. Daya tahannya juga luar biasa sehingga awet digunakan dalam jangka panjang. Ini adalah pilihan ideal untuk pecinta motor custom dan klasik.',
                'harga' => 700000,
                'kategori' =>'Spakbor',
                'is_diskon' => true
            ],
            [
                'nama_produk' => 'Selebor Tengah GL100 Plastik ABS',
                'gambar' => 'SeleborTengahGL100.jpg',
                'deskripsi' => 'Slebor tengah ini dibuat dari bahan plastik ABS lentur dan tahan benturan, cocok digunakan untuk GL 100 dan GL 125. Produk ini berfungsi sebagai sambungan kolong belakang, membantu melindungi bagian bawah motor dari cipratan udara dan kotoran. Desainnya sangat presisi menyerupai part original, dengan kualitas buatan dalam negeri. Tidak mudah pecah dan mudah dipasang pada rangka motor. Ideal untuk pengguna yang menginginkan tampilan rapi serta perlindungan tambahan di bagian bawah motor. Cocok untuk pemulihan maupun pemakaian harian.',
                'harga' => 60000,
                'kategori' =>'Spakbor',
                'is_diskon' => true
            ],
            [
                'nama_produk' => 'Spakbor Slebor Depan Belakang Japstyle',
                'gambar' => 'SleborJapstyle.jpg',
                'deskripsi' => 'Spakbor depan dan belakang ini dirancang khusus untuk modifikasi motor bergaya Japstyle. Cocok digunakan untuk berbagai merek motor seperti Honda, Yamaha, hingga Suzuki. Desainnya minimalis dan fungsional, memberikan tampilan motor yang lebih retro dan bergaya klasik. Produk ini terbuat dari bahan kuat yang tahan lama digunakan dalam berbagai kondisi jalan. Ideal untuk Anda yang ingin mengganti spakbor bawaan motor dengan model Japstyle yang sedang tren. Selain itu, produk ini juga cocok untuk kebutuhan variasi atau proyek modifikasi motor custom.',
                'harga' => 50000,
                'kategori' =>'Spakbor',
                'is_diskon' => false,
            ],
        ];

        foreach ($products as $produk) {
            Produk::create($produk);
        }
    }
}
