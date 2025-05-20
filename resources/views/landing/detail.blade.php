<title>{{ $produk->nama_produk }} | Septa Classic Motor</title>
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
<link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@include('components.navbar')

<div class="breadcrumb">
  <a href="{{ route('index') }}">Home</a> &rsaquo;
  <a href="{{ route('landing.produk') }}">Products</a> &rsaquo;
  <span>Detail</span>
</div>

<div class="product-container">
  <div class="product-gallery">
    <img src="{{ asset('images/'.$produk->gambar) }}" alt="{{ $produk->nama_produk }}" class="main-image">
  </div>

  <div class="product-info">
    <div class="product-details">
      <h2 class="product-title">{{ $produk->nama_produk }}</h2>
      <p class="product-description">{{ $produk->deskripsi }}</p>
    </div>
    <div class="product-sidebar">
      <div class="product-price">Rp {{ number_format($produk->harga, 0, ',', '.') }}</div>
      <div class="product-actions">
        <a class="btn btn-whatsapp" target="_blank"
          href="https://wa.me/6282234322320?text={{ urlencode('Halo, saya tertarik dengan produk ' . $produk->nama_produk) }}">
          <i class="fab fa-whatsapp"></i> Beli via WhatsApp
        </a>
      </div>
    </div>
  </div>
</div>

@include('components.footer')