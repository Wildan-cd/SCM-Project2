<title>Septa Classic Motor</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="shortcut icon" href="images/logo.png" type="images/logo.png">

@include('components.navbar')
<section class="top" id="home">
  <h2>WELCOME TO</h2>
  <h1>SEPTA CLASSIC MOTOR</h1>
  <p>#ExpertInClassicRides</p>
  <a href="{{ route('landing.tentang') }}" class="btn">About Us</a>
</section>

<section class="services" id="services">
  <h2>Keunggulan Kami</h2>
  <div class="service-list">
    <div class="service-item">
      <h3>Classic Bike Specialists</h3>
      <p>Tim yang berpengalaman dengan fokus pada motor klasik, dari perawatan ringan hingga restorasi penuh.</p>
    </div>
    <div class="service-item">
      <h3>Original & Custom Parts</h3>
      <p>Menyediakan suku cadang orisinal dan kustom pilihan untuk menambah sentuhan personal pada motor Anda.</p>
    </div>
    <div class="service-item">
      <h3>Trusted by Motor Enthusiasts</h3>
      <p>Tumbuh bersama komunitas motor klasik, selalu berusaha memberikan hasil terbaik di setiap pengerjaan.</p>
    </div>
  </div>
</section>

<section class="bestSeller" id="bestSeller">
  <h2>Produk Unggulan</h2>
  <div class="bestSeller-grid">
    <img src="images/produk3.webp" alt="Produk Unggulan 1">
    <img src="images/unggulan1.jpg" alt="Produk Unggulan 2">
    <img src="images/unggulan2.jpg" alt="Produk Unggulan 3">
    <img src="images/unggulan3.jpg" alt="Produk Unggulan 4">
  </div>
</section>

<section class="collection" id="collection">
  <h2>Rawat, Bangun, Modifikasi - Rawat Untuk Motor Klasikmu</h2>
  <p>Kami hadir untuk pecinta motor klasik yang ingin kendaraannya tetap prima dan otentik. Mulai dari servis, restorasi, hingga part ori dan kustom - semua dikerjakan dengan penuh ketelitian dan cinta terhadap detail klasik.</p>
</section>

<section class="contact-preview">
  <h2>Siap Jadi Bintang di Jalanan?</h2>
  <p>Dari pecinta motor klasik untuk sesama penggemar jalanan!</p>
  <a href="https://wa.me/6282234322320" class="btn">Gaskeun Sekarang</a>
</section>

@include('components.footer')