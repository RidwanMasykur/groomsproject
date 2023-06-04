@extends('dashboardmebel.layouts2.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Produk</h1>
</div>

<a href="/dashboardmebel/produk/create" class="btn btn-success mb-3">Tambah produk +</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col" class="w-25">Gambar</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($produks as $produk)
        <tr>
          <td>{{ $loop->index + 1 }}</td>
          <td>
            <img src="{{ asset('storage/' . $produk->image) }}" class="w-100">
          </td>
          <td>{{ $produk->title }}</td>
          <td>
            {{ $produk->price }}
          </td>
          <td>
            {{ $produk->excerpt }}
          </td>
          <td>
            {{ $produk->caption }}
          </td>
            <td>
              <a href="/dashboardmebel/produk/{{ $produk->id }}/edit" class="btn btn-outline-dark mb-5">Ubah produk</a>
              <form action="/dashboardmebel/produk/{{ $produk->id }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin menghapus produk?')">Hapus produk</button>
              </form>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>

{{ $produks->links() }}

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>


@endsection