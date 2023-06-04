@extends('layouts/main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-registration w-100 m-auto">
            <center><h1 class="h4 mb-3 fw-normal">Daftar Sebagai :</h1></center>
            <form action="/register" method="post">
              @csrf
              <div class="form-group mb-3 d-flex justify-content-center gap-2">
                <input type="radio" class="btn-check" name="roles" id="PetaniJamur" autocomplete="off" value="PetaniJamur" checked >
                <label class="btn btn-outline-success" for="PetaniJamur">Petani Jamur</label>
                <input type="radio" class="btn-check" name="roles" id="Mebel" autocomplete="off" value="Mebel" >
                <label class="btn btn-outline-success" for="Mebel">Mebel</label>
              </div>
                <div class="form-floating mb-2">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" >
                    <label for="name">Nama</label>
                    @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
              <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" >
                <label for="email">Email</label>
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
              </div>
              <div class="form-floating mb-2">
                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="address" >
                <label for="address">Alamat</label>
                    @error('address')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
              </div>
              <div class="form-floating mb-2">
                <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="phone" >
                <label for="phone">Nomor Telepon</label>
                    @error('phone')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
              </div>
              <div class="form-floating mb-2">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" >
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