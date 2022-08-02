@extends('template.master')

@section('judul_konten')
    Data Barang
@endsection

@section('main')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Table </h3>
        </div>

        <div class="card-body">
            <a href="/barang/create" class="btn btn-primary mb-2">Tambah Barang</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Qty</th>
                        <th>Harga Beli</th>
                        <th>Supplier</th>
                        <th>Tanggal Pembelian</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $brg)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $brg->nama_barang }}</td>
                        <td>{{ $brg->qty }}</td>
                        <td>{{ $brg->harga_beli }}</td>
                        <td>{{ $brg->supplier }}</td>
                        <td>{{ $brg->tanggal_pembelian }}</td>
                        <td>
                            <a href="/barang/hapus/{{$brg->id}}" class="btn btn-danger mb-2">Hapus</a>
                            <a href="/barang/edit/{{$brg->id}}" class="btn btn-warning mb-2">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
