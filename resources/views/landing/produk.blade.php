<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Septa Classic Motor</title>
  <link rel="stylesheet" href="css/produk.css">
  <link rel="shortcut icon" href="images/logo.png" type="images/logo.png">

</head>

<body>
  @include('components.navbar')

  <section class="produk-top" id="produk">
    <h1>Products</h1>
  </section>
  <div class="breadcrumb">
    <a href="{{ route('index') }}">Home</a> &rsaquo; Products
  </div>

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

  <div class="row">
    <div class="product-grid">
    @foreach ($produk as $produk)
      <div class="product-card">
        <img src="{{ asset('/'.$produk->gambar) }}" alt="{{ $produk->nama_produk }}" />
        <div class="product-title">{{ $produk->nama_produk }}</div>
        <a href="{{ route('landing.detail', $produk->id) }}" class="btn">Detail</a>
      </div>
      @endforeach
    </div>
  </div>

  @include('components.footer')
  <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>