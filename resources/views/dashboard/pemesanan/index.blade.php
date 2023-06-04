@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pemesanan</h1>
</div>

<a href="/dashboard/pemesanan/create" class="btn btn-success mb-3">Tambah Pemesanan +</a>

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
            <span style="display: flex;width: 100%;justify-content: center;color: #FFF; padding: 10px;border-radius: 10px;background: lightgreen;">{{ $pemesanan->status }}</span>
          </td>
            <td>
              <form action="/dashboard/pemesanan/{{ $pemesanan->id }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin menghapus pemesanan?')">Hapus pemesanan</button>
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


@endsection