@extends('template.master')

@section('judul_konten')
    Edi
@endsection

@section('main')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit</h3>
            </div>

            <form action="/keluar/modify" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $keluar->id}}>
                <div class="card-body>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang"
                            value="{{ $keluar->nama_barang }}" placeholder="Masukkan Nama Barang">
                       
                    </div>

                    <div class="form-group">
                        <label for="qty">Qty</label>
                        <input type="text" class="form-control" id="qty" name="qty"
                            value="{{ $keluar->qty }}" placeholder="Masukkan qty">
                       
                    </div>

                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas"
                            value="{{ $keluar->kelas }}" placeholder="Masukkan Nama Kelas">
                        
                    </div>

                    
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
            @endsection
