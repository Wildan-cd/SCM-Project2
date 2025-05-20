<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Katalog Produk</h3>
            <div class="card-tools">
                <a href="{{ route('admin.input_produk') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Produk
                </a>
            </div>
        </div>
        
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        <form action="{{ route('admin.input_produk') }}" method="get">

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produk as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                @if($item->gambar)
                                    <img src="{{ asset('images/'.$item->gambar) }}" 
                                         alt="{{ $item->nama_produk }}" 
                                         class="img-thumbnail" 
                                         style="width: 100px; height: 100px; object-fit: cover;">
                                @else
                                    Tidak ada gambar
                                @endif
                            </td>
                            <td>{{ $item->nama_produk }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td>Rp{{ number_format($item->harga, 0, ',', '.') }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>
                                <div class="btn-group d-flex">
                                    <a href="{{ route('admin.update_produk', $item->id) }}" 
                                       class="btn btn-warning btn-sm mr-2">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.dashboard.delete', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </form>

            {{ $produk->links() }}
        </div>
    </div>
</div>


</x-app-layout>
