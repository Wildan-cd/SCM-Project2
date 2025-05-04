<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $produk->nama_produk }} | Septa Classic Motor</title>
  <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
  <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
  <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

  @include('components.navbar')
  <div class="breadcrumb">
    <a href="{{ route('index') }}">Home</a> &rsaquo; 
    <a href="{{ route('landing.produk') }}">Products</a> &rsaquo; 
    <span>Detail</span>
  </div>
  
  <div class="product-container">
    <div class="product-gallery">
      <img src="{{ asset($produk->gambar) }}" alt="{{ $produk->nama_produk }}" class="main-image">
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
             href="https://wa.me/6282234322320?text=Halo,%20saya%20tertarik%20dengan%20produk%20{{ urlencode($produk->nama_produk) }}">
            <i class="fab fa-whatsapp"></i>  Beli via WhatsApp
          </a>
        </div>
      </div>
    </div>
  </div>

  <a href="https://wa.me/6282341836452" target="_blank" class="whatsapp-float">
  </a>

  @include('components.footer')

</body>

</html>