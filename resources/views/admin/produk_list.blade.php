@extends('admin.layout')

@section('content')

<!--begin::App Main-->
<main class="app-main">
  <!--begin::App Content Header-->
  <div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">List Produk</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Produk</li>
          </ol>
        </div>
      </div>
      <!--end::Row-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::App Content Header-->
  <!--begin::App Content-->
  <div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-md-12">
          <div class="card mb-6">
            <div class="card-header">
              <h3 class="card-title">List Produk</h3>
              <div class="d-flex justify-content-end">
                <a href="{{ route('admin.input_produk') }}" type="button" class="btn btn-success">Tambah Data</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">id</th>
                    <th class="d-none d-sm-table-cell">Gambar</th>
                    <th class="d-none d-sm-table-cell">Kategori</th>
                    <th>Nama</th>
                    <th class="d-none d-sm-table-cell">Harga</th>
                    <th class="d-none d-sm-table-cell">Harga Diskon</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($produk as $row)
                  <tr>
                    <td>{{ $row->id }}.</td>
                    <td class="d-none d-sm-table-cell">
                      <img src="{{ asset('storage/' . $row->gambar) }}"
                        alt="foto produk"
                        class="img-fluid d-block mx-auto"
                        style="max-width: 200px; width: 100%;">
                    </td>
                    <td class="d-none d-sm-table-cell">{{ $row->kategori }}</td>
                    <td>{{ $row->nama_produk }}</td>
                    <td class="d-none d-sm-table-cell">{{ $row->harga }}</td>
                    <td class="d-none d-sm-table-cell">{{ $row->harga_diskon }}</td>
                    <td>
                      <div class="btn-group mb-2" role="group" aria-label="Basic mixed styles example">
                        <a href="{{ route('admin.update_produk', ['id' => $row->id]) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.produk.delete', $row->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                      </div>
                    </td>

                  </tr>

                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="mt-4 d-flex justify-content-center">
              {{ $produk->withQueryString()->links() }}
            </div>
            <!--end::Container-->
          </div>
          <!--end::App Content-->
</main>
<!--end::App Main-->

@endsection