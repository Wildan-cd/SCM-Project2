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

<section class="layanan-section">
  <!-- <h2 class="layanan-title">Layanan</h2>
  <p class="layanan-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel perferendis delectus consequuntur velit ullam ducimus voluptatibus explicabo error provident sint quisquam reiciendis, molestiae amet quo et unde aperiam commodi aspernatur?</p> -->

  <div class="filter-buttons">
     <a href="{{ route('landing.layanan') }}">All</a>
    @foreach (['Spareparts', 'Restoration', 'Modification'] as $cat)
        <a href="{{ route('landing.layanan', ['kategori' => $cat]) }}" class="{{ request('kategori') === $cat ? 'active' : '' }}">
      {{ $cat }}</a>
        @endforeach
  </div>  

  <div class="layanan-grid">
    @foreach ($layanan as $item)
    <div class="layanan-item">
      <img src="{{ asset('images/'.$item->gambar) }}" />
    </div>
    @endforeach
  </div>
</section>

@include('components.footer')

<script src="{{ asset('js/layanan.js') }}"></script>