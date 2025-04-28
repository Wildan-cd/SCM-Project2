<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="images/logo.png" type="logo">
  <title>Septa Classic Motor</title>
  <link rel="stylesheet" href="css/produk.css">

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
        <div class="produk-box">
            
            <a href="{{ route('landing.produk') }}" class="btn {{ request('kategori') ? 'btn-outline-warning' : 'btn-warning' }}">Semua Produk</a>
        <a href="{{ route('landing.produk', ['kategori' => 'Diskon']) }}" class="btn btn-outline-warning">Diskon</a>
        @foreach (['Lampu Depan', 'Lampu Belakang', 'Sein', 'Spakbor', 'Keranjang', 'Tangki', 'Footstep'] as $cat)
            <a href="{{ route('landing.produk', ['kategori' => $cat]) }}" class="btn btn-outline-warning">{{ $cat }}</a>
        @endforeach
        </div>
    </div>
  </div>

  <div class="row">
    @foreach ($produk as $produk)
  <div class="product-grid">
    <div class="product-card">
      <img src="{{ asset('/'.$produk->gambar) }}" alt="{{ $produk->nama_produk }}"/>
      <div class="product-title">{{ $produk->nama_produk }}</div>
      <a href="{{ route('landing.detail', $produk->id) }}" class="btn">Detail</a>
    </div>
  </div>
  @endforeach
</div>

  @include('components.footer')
  <script src="js/produk.js"></script>

</body>
</html>
