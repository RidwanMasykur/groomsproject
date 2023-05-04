@extends('layouts/main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-registration w-100 m-auto">
            <h1 class="h4 mb-3 fw-normal">Silahkan Isi Data</h1>
            <form action="/register" method="post">
              @csrf
                <div class="form-floating mb-2">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required>
                    <label for="name">Nama</label>
                    @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
              <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required>
                <label for="email">Email</label>
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
              </div>
              <div class="form-floating mb-2">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                    @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
              </div>
              <button class="w-100 btn btn-lg btn-dark" type="submit">Daftar</button>
            </form>
            <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">Masuk!</a></small>
        </main>
    </div>
</div>

@endsection