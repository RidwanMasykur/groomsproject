@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Buat Jadwal Baru</h1>
</div>

<div class="col-lg-9">
    <form method="post" action="/dashboard/jadwal" enctype="multipart/form-data">
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
            <label>Nama Jamur</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="input-group date" data-provide="datepicker">
            <label>Tanggal Awal Bibit</label>
            <input type="text" class="form-control">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" class="form-control" name="text">
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="text" class="form-control" name="text">
        </div>
        <button type="submit" class="btn btn-dark" onclick="return confirm('Apakah Anda yakin menyimpan jadwal?')">Simpan</button>
    </form>
</div>


@endsection