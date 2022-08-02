@extends('template.master')

@section('judul_konten')
    Edit
@endsection

@section('main')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit</h3>
            </div>

            <form action="/barang/modify" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $barang->id}}>
                <div class="card-body>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang"
                            value="{{ $barang->nama_barang }}" placeholder="Masukkan Nama Barang">
                       
                    </div>

                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="text" class="form-control" id="qty" name="qty"
                            value="{{ $barang->qty }}" placeholder="Masukkan qty">
                       
                    </div>

                    <div class="form-group">
                        <label for="harga_beli">Harga Beli</label>
                        <input type="text" class="form-control" id="harga_beli" name="harga_beli"
                            value="{{ $barang->harga_beli }}" placeholder="Masukkan Harga beli">
                        
                    </div>

                    <div class="form-group">
                        <label for="supplier">Supplier</label>
                        <input type="text" class="form-control" id="supplier" name="supplier"
                            value="{{ $barang->supplier }}" placeholder="Masukkan supplier">
                       
                    </div>

                    <div class="form-group">
                        <label for="tanggal_pembelian">Tanggal Pembelian</label>
                        <input type="text" class="form-control" id="tanggal_pembelian" name="tanggal_pembelian"
                            value="{{ $barang->tanggal_pembelian }}" placeholder="Masukkan tanggal pembelian">
                       
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
            @endsection
