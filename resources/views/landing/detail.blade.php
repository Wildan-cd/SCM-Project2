<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Septa Classic Motor</title>
    <link rel="stylesheet" href="css/detail.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>
<body>
    @include('components.navbar')
    <div class="product-container">
        <div class="product-gallery ">
            
                <img src="{{ asset('/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}" class="img-fluid rounded">
            
            <div class="product-info">
                <div class="product-details">
                    <h1 class="product-tittle">{{ $produk->nama_produk }}</h1>
                    <p class="text-muted">Kategori: {{ $produk->kategori }}</p>
                    <p class="product-description">{{ $produk->deskripsi }}</p>
                </div>

                <div class="product-sidebar">
                    <div class="product-price">Rp {{ number_format($produk->harga, 0, ',', '.') }}</div>
                    <div class="product-actions">
                      <a href="#" class="btn btn-whatsapp">
                        <i class="fas fa-shopping-cart"></i> Order via WhatsApp
                      </a>
                    </div>
                  </div>

            </div>
        </div>
    </div>
</body>
</html>


