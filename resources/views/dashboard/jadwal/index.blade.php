@extends('dashboard/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Penjadwalan</h1>
</div>

<a href="/dashboard/jadwal/create" class="btn btn-dark mb-3">Tambah Jadwal</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col" class="w-25">Gambar</th>
      <th scope="col">Nama Jamur</th>
      <th scope="col">Tanggal Awal Bibit</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($jadwals as $jadwal)
        <tr>
          <td>{{ $loop->index + 1 }}</td>
          <td>
            <img src="{{ asset('storage/' . $jadwal->image) }}" class="w-100">
          </td>
          <td>{{ $jadwal->title }}</td>
          <td>
            <a href="/dashboard/jadwal/{{ $jadwal->id }}/edit" class="btn btn-outline-dark mb-5">Ubah Jadwal</a>
            <form action="/dashboard/jadwal/{{ $jadwal->id }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin menghapus jadwal?')">Hapus Postingan</button>
            </form>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>

{{ $jadwals->links() }}

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>


@endsection