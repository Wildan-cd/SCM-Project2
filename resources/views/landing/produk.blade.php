<link rel="stylesheet" href="{{ asset('css/produk.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

@include('components.navbar')

<section class="produk-top" id="produk">
  <h1>Products</h1>
</section>
<div class="breadcrumb">
  <a href="{{ route('index') }}">Home</a> &rsaquo; Products
</div>

<div class="mb-4 text-center">
  <div class="d-flex justify-content-end">
    <div class="dropdown d-inline-block me-5">
      <button class="btn btn-outline-dark dropdown-toggle" type="button" id="dropdownKategori" data-bs-toggle="dropdown" aria-expanded="false">
        &#9776; Kategori
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownKategori">
        <li>
          <a class="dropdown-item {{ $kategori === null ? 'active' : '' }}"
            href="{{ route('landing.produk') }}">
            Semua Produk
          </a>
        </li>
        <li>
          <a class="dropdown-item {{ $kategori === 'Diskon' ? 'active' : '' }}"
            href="{{ route('landing.produk', ['kategori' => 'Diskon']) }}">
            Diskon
          </a>
        </li>
        @foreach($semua_kategori as $kat)
        <li>
          <a class="dropdown-item {{ $kategori === $kat ? 'active' : '' }}"
            href="{{ route('landing.produk', ['kategori' => $kat]) }}">
            {{ ucfirst($kat) }}
          </a>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>

<div class="container py-4">
  <div class="row g-4">
    @foreach($produk as $item)
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
      <div class="card h-100 shadow-sm produk-card">
        <img src="{{ asset('storage/'.$item->gambar) }}" class="card-img-top img-produk" alt="{{ $item->nama_produk }}">
        <div class="card-body d-flex flex-column">
          <h6 class="card-title">{{ $item->nama_produk }}</h6>
          <p class="card-text mb-1 text-danger fw-bold mt-auto">
            Rp{{ number_format($item->harga_diskon ?? $item->harga, 0, ',', '.') }}
            @if($item->is_diskon)
            <span class="text-muted text-decoration-line-through fw-normal ms-1">
              Rp{{ number_format($item->harga, 0, ',', '.') }}
            </span>
            @endif
          </p>
          @php
            $pesan = "Halo, saya tertarik dengan produk " . $item->nama_produk . ", apakah tersedia?";
            $link = 'https://wa.me/send?phone=6282234322320&text=' . urlencode($pesan);
          @endphp
          <a href="{{ $link }}" target="_blank" class="btn btn-success mt-2">
            Beli via WhatsApp
          </a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<div class="mt-4 d-flex justify-content-center">
  {{ $produk->links('vendor.pagination.bootstrap-5') }}
</div>

@include('components.footer')

<script src="{{ asset('js/script.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800, 
    once: true 
  });
</script>