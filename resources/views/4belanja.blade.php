@extends('layouts.main')

@section('container')
<tbody>
  @foreach ($produks as $produk)
      <tr>
        <td>{{ $loop->index + 1 }}</td>
        <td>
          <img src="{{ asset('storage/' . $produk->image) }}" class="w-100">
        </td>
        <td>{{ $produk->title }}</td>
        <td>
          {{ date('d-m-Y',strtotime($produk->created_at)) }}
        </td>
        <td>
          {{ $produk->body }}
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
@endsection