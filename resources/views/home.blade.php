@extends('layouts/main')

@section('container')
    <main class="relative">
      <img src="img/grooms.jpg" class="bg-img">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="carousel-caption text-start">
                  <h1>Menambah Pengetahuan Budidaya Jamur dengan Petani Jamur Lainnya</h1> 
                  <p>Dapatkan pengetahuan tentang budidaya jamur dari petani lainnya. Jangan ragu jangan bimbang, dijokiin GROOMS pasti berkembang. YUK DAFTAR SEKARANG!</p>
                  <p><a class="btn btn-lg btn-dark" href="/register">Daftar Sekarang!</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </main>
@endsection