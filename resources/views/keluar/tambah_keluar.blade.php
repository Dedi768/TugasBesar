@extends('template.master')

@section('judul_konten')
    Tambah
@endsection

@section('main')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambah Pengeluaran</h3>
            </div>

            <form action="/keluar/tambah" method="POST">
                @csrf
                <div class="card=body">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang"
                            value="{{ old('nama_barang') }}" placeholder="Masukkan Nama Barang">
                       
                    </div>

                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="text" class="form-control" id="qty" name="qty"
                            value="{{ old('qty') }}" placeholder="Masukkan qty">
                       
                    </div>

                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas"
                            value="{{ old('kelas') }}" placeholder="Masukkan Nama kelas">
                        
                    </div>

                    
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"> Simpan</button>
                </div>
            </form>
        </div>
            @endsection
