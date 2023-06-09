@extends('layouts.main')

@section('container')

<div class="container text-center my-5">
  <h3>{{ $forum->title }}</h3>
  <div class="image d-flex">
    <img src="{{ asset('storage/' . $forum->image) }}">
  </div>
  <p>{!! $forum->body !!}</p>
</div>

<section class="bg-dark">
  <div class="container py-5 text-dark">
    <div class="row d-flex justify-content-center">
      <div class="col-md-11 col-lg-9 col-xl-7">
        
        @foreach ($forum->komentar as $komentar)
            
        <div class="d-flex flex-start mb-4">
          <div class="card w-100">
            <div class="card-body p-4">
              <div>
                <div class="d-flex justify-content-between">
                  <h5>{{ $komentar->nama }}</h5>
                  @if ($komentar->user_id == auth()->user()->id)
                  <div>
                    <a href="/forum/{{ $komentar->id }}/{{ $forum->id }}/komentar/hapus" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda yakin menghapus komentar?')"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                  </div>
                  @endif
                </div>
                <p>
                  {{$komentar->komentar}}
                </p>

              </div>
            </div>
          </div>
        </div>

        @endforeach

      </div>
    </div>
  </div>
</section>

<form action="/forum/{{ $forum->id }}/komentar">
<section class="bg-dark">
  <div class="container py-5 text-dark">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-6">
        <div class="card">
          <div class="card-body p-4">
            <div class="d-flex flex-start w-100">
              <div class="w-100">
                <h5>Nama</h5>
                <input type="text" name="nama" class="form-control mb-4" value="{{ auth()->user()->name }}" readonly>
                <h5>Tambahkan Komentar</h5>
                <div class="form-outline">
                  <textarea class="form-control" id="textAreaExample" rows="4" name="komentar"></textarea>
                </div>
                <div class="d-flex justify-content-end mt-3">
                  @if (auth()->check())
                    <button type="submit" class="btn btn-success">
                      Kirim Komentar
                    </button>
                  @else
                    <button type="button" class="btn btn-success" disabled>
                      Login Terlebih Dahulu
                    </button>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<footer class="text-body-secondary py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Kembali ke atas</a>
    </p>
  </div>
</footer>
</section>
</form>

@endsection