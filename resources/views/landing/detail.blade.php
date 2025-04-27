<div class="card shadow-sm p-4">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('public/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h2 class="mb-3">{{ $produk->nama_produk }}</h2>
            <p class="text-muted">Kategori: {{ $produk->kategori }}</p>
            <h4 class="text-warning mb-3">Rp {{ number_format($produk->harga, 0, ',', '.') }}</h4>
            <p>{{ $produk->deskripsi }}</p>
        </div>
    </div>
</div>