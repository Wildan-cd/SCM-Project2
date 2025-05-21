<title>Septa Classic Motor</title>
<link rel="stylesheet" href="{{ asset('css/form_ulasan.css') }}">
<link rel="shortcut icon" href="images/logo.png" type="images/logo.png">

@include('components.navbar')
<section class="form-section">
  <section class="form-ulasan">
    <h2>Kirim Ulasan Kamu!</h2>
    @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="{{ route('landing.ulasan') }}" method="POST">
      @csrf
      <label>Nama:</label>
      <input type="text" name="nama" required>

      <label>Email:</label>
      <input type="text" name="email">

      <label>Rating (1-5):</label>
      <select name="rating" required>
        <option value="" disabled selected>Rating</option>
        <option value="5">5 - Sangat Puas</option>
        <option value="4">4 - Puas</option>
        <option value="3">3 - Cukup</option>
        <option value="2">2 - Kurang</option>
        <option value="1">1 - Tidak Puas</option>
      </select>

      <label>Ulasan:</label>
      <textarea name="pesan" required></textarea>

      <button type="submit">Kirim Ulasan</button>
    </form>
  </section>
</section>

@include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800, 
    once: true 
  });
</script>