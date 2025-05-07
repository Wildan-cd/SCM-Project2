<title>Septa Classic Motor</title>
<link rel="stylesheet" href="{{ asset('css/produk.css') }}">
<link rel="shortcut icon" href="images/logo.png" type="images/logo.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

@include('components.navbar')

<section class="produk-top" id="produk">
  <h1>Products</h1>
</section>
<div class="breadcrumb">
  <a href="{{ route('index') }}">Home</a> &rsaquo; Products
</div>

<!-- <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form action="/search" class="d-flex" role="search" method="GET" a>
      <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav> -->

<div class="Products">
  <div class="container">
    <div class="produk-category-wrapper">
      <button class="kategori-toggle" onclick="toggleKategori()">☰ Kategori</button>
      <div class="produk-box" id="kategoriMenu">
        <a href="{{ route('landing.produk') }}">Semua Produk</a>
        <a href="{{ route('landing.produk', ['kategori' => 'Diskon']) }}">Diskon</a>
        @foreach (['Lampu Depan', 'Lampu Belakang', 'Sein', 'Spakbor', 'Keranjang', 'Tangki', 'Footstep'] as $cat)
        <a href="{{ route('landing.produk', ['kategori' => $cat]) }}">{{ $cat }}</a>
        @endforeach
      </div>
    </div>
  </div>
</div>

<div class="row container mt-3">
  <div class="product-grid">
    @foreach ($produk as $item)
    <div class="product-card">
      <img src="{{ asset('/'.$item->gambar) }}" alt="{{ $item->nama_produk }}" />
      <div class="product-title">{{ $item->nama_produk }}</div>
      <a class="btn" href="{{ route('landing.detail', $item->id) }}">Detail</a>
    </div>
    @endforeach
  </div>
  <div class="d-flex justify-content-center mt-4">
    {{ $produk->links('pagination::bootstrap-5') }}
  </div>
</div>

@include('components.footer')

<script src="{{ asset('js/script.js') }}"></script>