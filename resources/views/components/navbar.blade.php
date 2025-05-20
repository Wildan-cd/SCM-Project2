<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Septa Classic Motor</title>
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="shortcut icon" href="images/logo.png" type="images/logo.png">
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<header>
  <div class="logo-container">
    <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo">
    <h1>Septa Classic Motor</h1>
  </div>

  <nav id="nav-menu">
    <ul>
      <li><a href="{{ route('index') }}" class="beranda">Home</a></li>
      <li><a href="{{ route('landing.produk') }}" class="produk">Products</a></li>
      <li><a href="{{ route('landing.layanan') }}" class="layanan">Service</a></li>
      <li><a href="{{ route('landing.tentang') }}" class="tentang">About</a></li>
      <li><a href="{{ route('landing.ulasan') }}" class="ulasan">Review</a></li>
    </ul>
  </nav>

  <div class="hamburger" id="hamburger">
    <div></div>
    <div></div>
    <div></div>
  </div>

  <script src="{{ asset('js/navbar.js') }}"></script>
</header>