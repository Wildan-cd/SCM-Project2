<title>Septa Classic Motor</title>
<link rel="stylesheet" href="{{ asset('css/update_produk.css') }}">
<link rel="shortcut icon" href="images/logo.png" type="images/logo.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">


<section class="form-section">
  <section class="form-update">
    <h2>Update Produk</h2>
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
    <form action="{{ route('admin.dashboard.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <label>Nama Produk:</label>
      <input type="text" name="nama_produk" value="{{ old('nama_produk', $produk->nama_produk) }}">

      <label>Harga:</label>
      <input type="number" name="harga" value="{{ old('harga', $produk->harga) }}">

      <label>Harga Diskon:</label>
      <input type="number" name="harga_diskon" value="{{ old('harga_diskon', $produk->harga_diskon) }}">

      <label>Kategori:</label>
      <select name="kategori" >
        <option value="{{ old('kategori', $produk->kategori) }}" >{{ old('kategori', $produk->kategori) }}</option>
        <option value="Lampu Depan">Lampu Depan</option>
        <option value="Lampu Belakang">Lampu Belakang</option>
        <option value="Sein">Sein</option>
        <option value="Spakbor">Spakbor</option>
        <option value="Keranjang">Keranjang</option>
        <option value="Tangki">Tangki</option>
        <option value="Footstep">Footstep</option>
      </select>

      <label>Diskon:</label>
      <select name="is_diskon" value="{{ old('is_diskon', $produk->is_diskon) }}">
        <option value="{{ old('is_diskon', $produk->is_diskon) }}">{{ old('is_diskon', $produk->is_diskon) }}</option>
        <option value="1">Ya</option>
        <option value="0">Tidak</option>
      </select>


      <label>Gambar:</label><br>
      <img src="{{ asset('storage/'.$produk->gambar) }}" alt="{{ $produk->nama_produk }} " >
      <input type="file" name="gambar" >

      
      <button type="submit" class="btn btn-dark mt-2">Update Produk</button>
      
    </form>
    <a href="{{ route('admin.produk_list') }}" type="submit" class="btn btn-danger mt-2">Batal</a>
  </section>
</section>
