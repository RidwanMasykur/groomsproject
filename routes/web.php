<?php

use App\Models\Forum;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardForumController;
use App\Http\Controllers\DashboardJadwalController;
use App\Http\Controllers\DashboardBelanjaController;


Route::get('/', function () {
    return view ('home',[
        "title" => "Grooms Home"
    ]);
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

Route::get('/dashboard', function() {
    return view('dashboard.index', ['forums' => Forum::where('user_id', auth()->user()->id)->paginate(5)]);
})->middleware('auth');

Route::resource('/dashboard/forum', DashboardForumController::class)->middleware('auth');
Route::resource('/dashboard/jadwal', DashboardJadwalController::class)->middleware('auth');
Route::resource('/dashboard/belanja', DashboardBelanjaController::class)->middleware('auth');

Route::get('/forum', [ForumController::class, 'index']);
Route::get('/forum/{forum}/lihat', [ForumController::class, 'lihat']);
Route::get('/forum/{id}/komentar', [ForumController::class, 'komentar']);
Route::get('/forum/{komentar_id}/{forum_id}/komentar/hapus', [ForumController::class, 'komentarDestroy']);
Route::put('/forum/{komentar}/{forum_id}/komentar/edit', [ForumController::class, 'komentarUpdate']);