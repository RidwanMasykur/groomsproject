@extends('dashboardmebel.layouts2.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Buat Jadwal Baru</h1>
</div>

<div class="col-lg-9">
    <form method="post" action="/dashboardmebel/produk" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Masukkan Gambar!</label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label>Harga</label>
            <input type="price" class="form-control" name="text">
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" class="form-control" name="caption">
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <input type="text" class="form-control" name="body">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>


@endsection