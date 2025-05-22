<title>Septa Classic Motor</title>
<link rel="stylesheet" href="{{ asset('css/form_ulasan.css') }}">
<link rel="shortcut icon" href="images/logo.png" type="images/logo.png">


<section class="form-section">
  <section class="form-ulasan">
    <h2>Tambah Produk</h2>
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
    <form action="{{ route('admin.dashboard') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <label>Nama Produk:</label>
      <input type="text" name="nama_produk" required>

      <label>Harga:</label>
      <input type="number" name="harga">

      <label>Kategori:</label>
      <select name="kategori" required>
        <option value="" disabled selected>Kategori</option>
        <option value="Lampu Depan">Lampu Depan</option>
        <option value="Lampu Belakang">Lampu Belakang</option>
        <option value="Sein">Sein</option>
        <option value="Spakbor">Spakbor</option>
        <option value="Keranjang">Keranjang</option>
        <option value="Tangki">Tangki</option>
        <option value="Footstep">Footstep</option>
      </select>

      <label>Diskon:</label>
      <select name="is_diskon" required>
        <option value="" disabled selected>Diskon</option>
        <option value="1">Ya</option>
        <option value="0">Tidak</option>
      </select>

      <label>Deskripsi:</label>
      <textarea name="deskripsi" required></textarea>

      <label>Gambar:</label>
      <input type="file" name="gambar" required>

    
        <button type="submit">Tambah produk</button>
    
    </form>
  </section>
</section>
