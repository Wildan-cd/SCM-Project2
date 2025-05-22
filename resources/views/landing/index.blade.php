<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@include('components.navbar')
<section class="top" id="home">
  <h2>WELCOME TO</h2>
  <h1>SEPTA CLASSIC MOTOR</h1>
  <p>#ExpertInClassicRides</p>
  <a href="{{ route('landing.tentang') }}" class="btn" data-aos="zoom-in" data-aos-delay="100">About Us</a>
</section>

<section class="services" id="services" data-aos="fade-up">
  <h2>Keunggulan Kami</h2>
  <div class="service-list">
    <div class="service-item" data-aos="fade-up" data-aos-delay="100">
      <h3>Classic Bike Specialists</h3>
      <p>Tim yang berpengalaman dengan fokus pada motor klasik, dari perawatan ringan hingga restorasi penuh.</p>
    </div>
    <div class="service-item" data-aos="fade-up" data-aos-delay="100">
      <h3>Original & Custom Parts</h3>
      <p>Menyediakan suku cadang orisinal dan kustom pilihan untuk menambah sentuhan personal pada motor Anda.</p>
    </div>
    <div class="service-item" data-aos="fade-up" data-aos-delay="100">
      <h3>Trusted by Motor Enthusiasts</h3>
      <p>Tumbuh bersama komunitas motor klasik, selalu berusaha memberikan hasil terbaik di setiap pengerjaan.</p>
    </div>
  </div>
</section>

<section class="bestSeller" id="bestSeller" data-aos="zoom-in">
  <h2>Produk Unggulan</h2>
  <div class="bestSeller-grid">
    <img src="images/produk3.webp" alt="Produk Unggulan 1" data-aos="zoom-in" data-aos-delay="100">
    <img src="images/unggulan1.jpg" alt="Produk Unggulan 2" data-aos="zoom-in" data-aos-delay="100">
    <img src="images/unggulan2.jpg" alt="Produk Unggulan 3" data-aos="zoom-in" data-aos-delay="100">
    <img src="images/unggulan3.jpg" alt="Produk Unggulan 4" data-aos="zoom-in" data-aos-delay="100">
  </div>
</section>

<section class="collection" id="collection">
  <h2 data-aos="fade-up">Rawat, Bangun, Modifikasi - Rawat Untuk Motor Klasikmu</h2>
  <p data-aos="fade-up" data-aos-delay="100">Kami hadir untuk pecinta motor klasik yang ingin kendaraannya tetap prima dan otentik. Mulai dari servis, restorasi, hingga part ori dan kustom - semua dikerjakan dengan penuh ketelitian dan cinta terhadap detail klasik.</p>
</section>

<section class="contact-preview">
  <h2 data-aos="fade-up">Siap Jadi Bintang di Jalanan?</h2>
  <p data-aos="fade-up" data-aos-delay="100">Dari pecinta motor klasik untuk sesama penggemar jalanan!</p>
  <a href="https://wa.me/6282234322320" class="btn" data-aos="fade-up" data-aos-delay="200">Grab Now</a>
</section>

@include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800, 
    once: true 
  });
</script>
