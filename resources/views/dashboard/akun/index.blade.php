@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Akun</h1>
</div>

<form class="container" action="/dashboard/akun" method="POST" enctype="multipart/form-data">
    @csrf
    @if (session()->has("message"))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get("message") }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="container-fluid row justify-content-center">
        <div class="col-lg-12 d-flex flex-column align-items-center">
            <div class="d-flex flex-column align-items-center text-center img-profile"><img class="rounded-circle" width="150px" src="{{ auth()->user()->getFirstMediaUrl("profile") != "" ? auth()->user()->getFirstMediaUrl("profile") : '/img/orang.jpg' }}"></div>
            <div class="col-md-3 border-right">
                <input type="file" accept="image/png, image/gif, image/jpeg" name="profile_img">
            </div>
            <h2 class="font-weight-bold">{{ auth()->user()->name }}</h2>
            <div class="col-md-5 border-right">
                <div>
                    <div class="row my-2">
                        <div class="col-md-6"><label class="labels">Nama</label><input type="text" class="form-control" name="name" placeholder="Nama" value="{{ auth()->user()->name }}"></div>
                        <div class="col-md-6"><label class="labels">No. Telepon</label><input type="number" name="phone" class="form-control" placeholder="No. Telepon" value="{{ auth()->user()->phone }}"></div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-6"><label class="labels">Email</label><input readonly type="email"  name="email" class="form-control" placeholder="Email" value="{{ auth()->user()->email }}"></div>
                        <div class="col-md-6"><label class="labels">Alamat</label><input type="text" name="address" class="form-control" placeholder="Alamat" value="{{ auth()->user()->address }}"></div>
                    </div>
                    <div class="mt-3 text-center"><button class="btn btn-dark profile-button" type="submit">Save Profile</button></div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
