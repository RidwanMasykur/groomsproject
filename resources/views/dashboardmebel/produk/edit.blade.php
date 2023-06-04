@extends('dashboardmebel.layouts2.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah Produk</h1>
</div>

<div class="col-lg-9">
    <img src="{{ asset('storage/' . $produk->image) }}" class="w-25">
    <form method="post" action="/dashboardmebel/produk/{{ $produk->id }}" enctype="multipart/form-data">
        @csrf
        @method('put')
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
            <input type="number" class="form-control" name="price">
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" class="form-control" name="stok">
        </div>
        <div class="mb-3">
            <label>Deskrpsi</label>
            <input type="text" class="form-control" name="caption">
        </div>
        <button type="submit" class="btn btn-dark" onclick="return confirm('Apakah Anda yakin mengubah produk?')">Simpan</button>
    </form>
</div>


@endsection