@extends('dashboardmebel.layouts2.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah Jadwal</h1>
</div>

<div class="col-lg-9">
    <img src="{{ asset('storage/' . $jadwal->image) }}" class="w-25">
    <form method="post" action="/dashboard/jadwal/{{ $jadwal->id }}" enctype="multipart/form-data">
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
            <label>Nama Jamur</label>
            <input type="text" class="form-control" name="title" readonly>
        </div>
        <div class="mb-3">
            <label>Tanggal Awal Bibit</label>
            <input type="date" class="form-control" name="text">
        </div>
        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" class="form-control" name="text" readonly>
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" class="form-control" name="number" readonly>
        </div>
        <button type="submit" class="btn btn-dark" onclick="return confirm('Apakah Anda yakin mengubah jadwal?')">Simpan</button>
    </form>
</div>


@endsection