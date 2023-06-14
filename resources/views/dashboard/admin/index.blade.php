@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Admin</h1>
</div>

<a href="/dashboard/admin" class="btn btn-success mb-3"></a>

<table class="table table-striped">
  <tbody>
    @foreach ($forums as $forum)
        <tr>
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