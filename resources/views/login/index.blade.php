@extends('layouts.main')

@section('container')
<head>
  <link rel="stylesheet" href="/css/login.css">
</head>
<body>
  <div class="row justify-content-center mb-10">
    <img src="" class="bg-img">
      <div class="col-md-4">
        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
          <main class="form-signin w-100 m-auto">
            <center><h1 class="h4 mb-3 fw-normal">Silahkan Isi Data</h1></center>
              <form action="/login" method="post">
                @csrf
                <div class="form-floating mb-2">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required>
                  <label for="email">Email</label>
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="form-floating">
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                  <label for="password">Password</label>
                    @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-dark" type="submit">Masuk</button>
              </form>
              <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Daftar Sekarang!</a></small>
          </main>
      </div>
  </div>
  
</body>


@endsection