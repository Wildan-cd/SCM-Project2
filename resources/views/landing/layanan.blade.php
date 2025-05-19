<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Septa Classic Motor</title>
<link rel="stylesheet" href="{{ asset('css/layanan.css') }}">
<link rel="shortcut icon" href="images/logo.png" type="images/logo.png">

@include('components.navbar')

<section class="layanan-top">
  <div class="overlay"></div>
  <h1 class="judul-layanan">Layanan</h1>
</section>

<div class="breadcrumb">
  <a href="{{ route('index') }}">Home</a> &rsaquo; Service
</div>

<section class="portfolio-section">
  <!-- <h2 class="portfolio-title">Layanan</h2>
  <p class="portfolio-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel perferendis delectus consequuntur velit ullam ducimus voluptatibus explicabo error provident sint quisquam reiciendis, molestiae amet quo et unde aperiam commodi aspernatur?</p> -->

  <div class="filter-buttons">
    <button class="active" data-filter="all">All</button>
    <button data-filter="spareparts">Spareparts</button>
    <button data-filter="restoration">Restoration</button>
    <button data-filter="modification">Modification</button>
  </div>

  <div class="portfolio-grid">
    <div class="portfolio-item" data-category="spareparts"><img src="images/sparepart11.jpg" alt="Spareparts"></div>
    <div class="portfolio-item" data-category="restoration"><img src="images/resto41.jpg" alt="Restoration"></div>
    <div class="portfolio-item" data-category="modification"><img src="images/motor1.1.jpg" alt="Modification"></div>
    <div class="portfolio-item" data-category="app"><img src="img4.jpg" alt="Portfolio App"></div>
    <div class="portfolio-item" data-category="card"><img src="img5.jpg" alt="Portfolio Card"></div>
    <div class="portfolio-item" data-category="web"><img src="img6.jpg" alt="Portfolio Web"></div>
  </div>
</section>

@include('components.footer')

<script src="{{ asset('js/portofolio.js') }}"></script>