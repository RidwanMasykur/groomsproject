@extends('dashboardmebel.layouts2.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pesanan Masuk</h1>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">No. Telepon</th>
      <th scope="col">Pembayaran</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Status Pesanan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($pemesanans as $key => $pemesanan)
        <tr>
          <td>
            {{ $key +1}}
          </td>
          <td>
            {{ $pemesanan->name }}
          </td>
          <td>
            {{ $pemesanan->address }}
          </td>
          <td>
            {{ $pemesanan->phone }}
          </td>
          <td>
            {{ $pemesanan->payment }}
          </td>
          <td>
            {{ $pemesanan->amount }}
          </td>
          <td>
            <select data-id="{{ $pemesanan->id }}" class="form-select status-select" aria-label="Default select example">
              <option value="dikemas" @if($pemesanan->status == 'dikemas') selected @endif>Dikemas</option>
              <option value="dikirim" @if($pemesanan->status == 'dikirim') selected @endif>Dikirim</option>
            </select>
          </td>
          <td>
            <form action="/dashboardmebel/pesananmasuk/{{ $pemesanan->id }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin menghapus pesanan?')">Hapus pesanan</button>
            </form>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>

{{ $pemesanans->links() }}

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="/js/pemesanan/index.js"></script>
@endsection