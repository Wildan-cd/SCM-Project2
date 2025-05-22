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
            <div class="col-sm-6"><h3 class="mb-0">Review</h3></div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Review</li>
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
                <div class="card-header"><h3 class="card-title">Review</h3>
                </div>
                <!-- /.card-header -->
                <div class="table-responsive">
                    <table class="table table-bordered" >
                    <thead>
                        <tr>
                        <th style="width: 10px">id</th>
                        <th class="d-none d-sm-table-cell">Nama</th>
                        <th class="d-none d-sm-table-cell">Email</th>
                        <th class="d-none d-sm-table-cell">Rating</th>
                        <th class="d-none d-sm-table-cell">Pesan</th>
                        <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ulasan as $row)
                        <tr >
                            <td>{{ $row->id }}.</td>
                            <td>{{ $row->nama }}</td>
                            <td class="d-none d-sm-table-cell">{{ $row->email }}</td>
                            <td>{{ $row->rating }}</td>
                            <td class="d-none d-sm-table-cell">{{ $row->pesan }}</td>
                            <td>
                                <div class="btn-group mb-2" role="group" aria-label="Basic mixed styles example">
                                    <form action="{{ route('admin.review.delete', $row->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus ulasan ini?');">
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
        <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>
    <!--end::App Main-->    

@endsection