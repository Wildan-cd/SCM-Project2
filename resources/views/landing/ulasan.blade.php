<link rel="stylesheet" href="css/ulasan.css">
@include('components.navbar')

<section class="ulasan-section" id="ulasan">
    <h1>Ulasan</h1>
</section>
    
<section class="daftar-ulasan">
    <div class="header-ulasan">
        <h2>Ulasan Pelanggan</h2>
        <a href="{{ route('landing.form_ulasan') }}" class="btn">+ Add Review</a>
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
</section>

@include('components.footer')