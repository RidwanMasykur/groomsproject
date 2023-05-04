@extends('dashboard/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Forum</h1>
</div>

<a href="/dashboard/forum/create" class="btn btn-dark mb-3">Tambah Postingan</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col" class="w-25">Gambar</th>
      <th scope="col">Judul</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($forums as $forum)
        <tr>
          <td>{{ $loop->index + 1 }}</td>
          <td>
            <img src="{{ asset('storage/' . $forum->image) }}" class="w-100">
          </td>
          <td>{{ $forum->title }}</td>
          <td>
            <a href="/dashboard/forum/{{ $forum->id }}/edit" class="btn btn-outline-dark mb-5">Ubah Postingan</a>
            <form action="/dashboard/forum/{{ $forum->id }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin menghapus postingan?')">Hapus Postingan</button>
            </form>
          </td>
        </tr>
    @endforeach
  </tbody>
</table>

{{ $forums->links() }}

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>


@endsection