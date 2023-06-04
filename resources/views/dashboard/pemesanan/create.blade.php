@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Buat Pemesanan Baru</h1>
</div>

<div class="col-lg-9">
    <form method="post" action="/dashboard/pemesanan" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" value="{{ auth()->user()->name }}" class="form-control" name="name" readonly>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" value="{{ auth()->user()->address }}" class="form-control" name="address" readonly>
        </div>
        <div class="mb-3">
            <label>No. Telepon</label>
            <input type="tel" value="{{ auth()->user()->phone }}" class="form-control" name="phone" readonly>
        </div>
        <div class="mb-3">
            <label>Pembayaran</label>
            <input type="text" value="COD" class="form-control" name="payment" readonly>
        </div>
        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" class="form-control" name="amount">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>


@endsection