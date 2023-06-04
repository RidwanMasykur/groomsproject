@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selamat datang, {{ auth()->user()->name }}!</h1>
</div>
<div class="album py-4 bg-body-tertiary">
    <div class="container">
  
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
        @foreach ($forums as $forum)
            
        <div class="col">
          <div class="groomforum card shadow-sm">
            <p class="fitimg"><img src="{{ asset('storage/' . $forum->image) }}" class="w-100"></p>
            <div class="card-body">
              <h3 class="card-text">{{ $forum->title }}</h3>
              {{ \Illuminate\Support\Str::limit(strip_tags($forum->excerpt), 30, '...') }}
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="forum/{{ $forum->id }}/lihat" class="btn btn-sm btn-outline-primary">Lihat</a>
                </div>
                <p>
                  {{ date('d-m-Y',strtotime($forum->created_at)) }}
                </p>
              </div>
            </div>
          </div>
        </div>
  
        @endforeach
  
      </div>
      <div class="mt-4">
        {{ $forums->links() }}
      </div>
    </div>
  </div>
@endsection