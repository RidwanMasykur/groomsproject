@extends('dashboard/layouts/main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah Postingan</h1>
</div>

<div class="col-lg-9">
    <img src="{{ asset('storage/' . $forum->image) }}" class="w-25">
    <form method="post" action="/dashboard/forum/{{ $forum->id }}" enctype="multipart/form-data">
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
            <label>Judul</label>
            <input type="text" class="form-control" name="title" value="{{ $forum->title }}">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Tulis Pesan Anda!</label>
            <input id="body" type="hidden" name="body" value="{{ $forum->body }}">
            <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-dark" onclick="return confirm('Apakah Anda yakin mengubah postingan?')">Simpan</button>
    </form>
</div>


@endsection