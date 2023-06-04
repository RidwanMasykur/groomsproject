@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Belanja</h1>
</div>
    <main class="d-flex">
      @foreach ($produks as $produk)
        <div class="card" style="width: 18rem;">
          <img src="{{ asset('storage/' . $produk->image) }}" class="w-100">
          <div class="card-body">
            <h1 class="card-title">{{ $produk->title }}</h1>
            <h5 class="card-text">Rp{{ $produk->price }}</h5>
            <p class="card-text">Stok : {{ $produk->stok }} kg</p>
            <h3 class="card-text">{{ $produk->caption }}</h3>
            <a href='/dashboard/pemesanan/create' class="btn btn-outline-success">Beli</a>
          </div>
        </div>
      @endforeach
      </main>
@endsection