<link rel="stylesheet" href="{{ asset('css/ulasan.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

@include('components.navbar')

<section class="ulasan-section" id="ulasan">
  <h1>Review</h1>
</section>

<div class="breadcrumb">
  <a href="{{ route('index') }}">Home</a> &rsaquo; Review
</div>

<section class="daftar-ulasan">
  <div class="header-ulasan">
    <h2>Ulasan Pelanggan</h2>
  </div>
  
  <div class="btn">
    <a type="button" class="btn btn-dark justify-content-end" href="{{ route('landing.form_ulasan') }}">+ Add Review</a>
  </div>

  @if (session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif

  <div class="ulasan-grid">
    @foreach ($data as $item)
    <div class="ulasan-item">
      <div class="info">
        <p class="nama">{{ $item->nama }}</p>
        <p class="email">{{ $item->email }}</p>
        <div class="meta">
          <span class="rating">
            {!! str_repeat('⭐', $item->rating) !!}
          </span>
          <span class="tanggal">{{ $item->tanggal }}</span>
        </div>
        <p class="pesan">{{ $item->pesan }}</p>
      </div>
    </div>
    @endforeach
  </div>

  <div class="d-flex justify-content-center mt-4">
    {{ $data->links('vendor.pagination.bootstrap-5') }}
  </div>
</section>

@include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true
  });
</script>