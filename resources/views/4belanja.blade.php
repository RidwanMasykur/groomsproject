@extends('layouts/main')

@section('container')
    <h1 class="container mt-4">Belanja</h1>
    <main>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <div class="col mt-5">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Serbuk Kayu Jati</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">Rp15.000</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Harga yang tertera untuk 1 karung dengan berat 5kg/1 karung</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-success">Beli</button>
              </div>
            </div>
          </div>
          <div class="col mt-5">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Serbuk Kayu Mahoni</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">Rp10.000</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Harga yang tertera untuk 1 karung dengan berat 5kg/1 karung</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-success">Beli</button>
              </div>
            </div>
          </div>
          <div class="col mt-5">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Serbuk Kayu Mangga</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">Rp7.000</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Harga yang tertera untuk 1 karung dengan berat 5kg/1 karung</li>
                </ul>
                <button type="button" class="w-100 btn btn-lg btn-outline-success">Beli</button>
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table text-center">
          </table>
        </div>
      </main>
@endsection