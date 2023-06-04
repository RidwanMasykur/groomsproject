<?php

use App\Models\Forum;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardForumController;
use App\Http\Controllers\DashboardJadwalController;
use App\Http\Controllers\DashboardBelanjaController;
use App\Http\Controllers\DashboardPemesananController;
use App\Http\Controllers\DashboardMebelProdukController;
use App\Http\Controllers\DashboardMebelPesananMasukController;


Route::get('/', function () {
    return view ('home',[
        "title" => "Grooms Home"
    ]);
});

Route::get('/tes', function () {
    dd(auth()->user()->getRoleNames());
});

Route::get('/jadwal', function () {
    return view ('3jadwal',[
        "title" => "Grooms Jadwal"
    ]);
});

Route::get('/belanja', function () {
    return view ('4belanja',[
        "title" => "Grooms Belanja"
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::middleware("auth")->group(function(){
    Route::get('/dashboard', function() {
        return view('dashboard.index', ['forums' => Forum::where('user_id', auth()->user()->id)->paginate(5)]);
    });
    
    Route::resource('/dashboard/forum', DashboardForumController::class);
    Route::resource('/dashboard/jadwal', DashboardJadwalController::class);
    Route::resource('/dashboard/belanja', DashboardBelanjaController::class);
    Route::resource('/dashboard/pemesanan', DashboardPemesananController::class);
    Route::get('/dashboard/akun', [AkunController::class, 'akun']);
    Route::post('/dashboard/akun', [AkunController::class, 'edit']);
    
    Route::get('/forum', [ForumController::class, 'index']);
    Route::get('/forum/{forum}/lihat', [ForumController::class, 'lihat']);
    Route::get('/forum/{id}/komentar', [ForumController::class, 'komentar']);
    Route::get('/forum/{komentar_id}/{forum_id}/komentar/hapus', [ForumController::class, 'komentarDestroy']);
    Route::resource('/dashboardmebel/produk', DashboardMebelProdukController::class);
    Route::resource('/dashboardmebel/pesananmasuk', DashboardMebelPesananMasukController::class);
    Route::get('/dashboardmebel/akun', [AkunController::class, 'akun']);
    Route::post('/dashboardmebel/akun', [AkunController::class, 'edit']);
});
