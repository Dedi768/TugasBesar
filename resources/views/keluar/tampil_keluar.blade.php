@extends('template.master')

@section('judul_konten')
    Data Barang Keluar
@endsection

@section('main')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Table </h3>
        </div>

        <div class="card-body">
            <a href="/keluar/create" class="btn btn-primary mb-2">Tambah Barang</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Qty</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keluar as $klr)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $klr->nama_barang }}</td>
                        <td>{{ $klr->qty }}</td>
                        <td>{{ $klr->kelas }}</td>
                        <td>
                            <a href="/keluar/hapus/{{$klr->id}}" class="btn btn-danger mb-2">Hapus</a>
                            <a href="/keluar/edit/{{$klr->id}}" class="btn btn-warning mb-2">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
