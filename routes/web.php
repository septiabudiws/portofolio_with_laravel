<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PortofolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return'Storage Linked Successfully.';
});

Route::get('/p', function () {
    return view('yoda.login.anjay');
});

// LOGIN
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/porto/{token_porto}', [PortofolioController::class, 'detail']);
Route::get('/blog/{token_blog}', [BlogController::class, 'detail']);

// start admin
Route::middleware(['auth'])->group (function(){

//KATEGORI
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori_tambah', [KategoriController::class, 'tambah']);
Route::post('/kategori_tambah', [KategoriController::class, 'tambah_action']);
Route::post('/kategori/{id}/edit', [KategoriController::class, 'edit_action']);
Route::get('/kategori/{id}/hapus', [KategoriController::class, 'hapus']);

//PORTOFOLIO
Route::get('/porto', [PortofolioController::class, 'index']);
Route::get('/porto_tambah', [PortofolioController::class, 'tambah']);
Route::post('/porto_tambah', [PortofolioController::class, 'tambah_action']);
Route::get('/porto/{id}/edit', [PortofolioController::class, 'edit']);
Route::post('/porto/{id}/edit', [PortofolioController::class, 'edit_action']);
Route::post('/upload', [PortofolioController::class, 'upload'])->name('ckeditor.upload');
Route::get('/porto/{id}/hapus', [PortofolioController::class, 'hapus']);

//BLOG
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog_tambah', [BlogController::class, 'tambah']);
Route::post('/blog_tambah', [BlogController::class, 'tambah_action']);
Route::get('/blog/{id}/edit', [BlogController::class, 'edit']);
Route::post('/blog/{id}/edit', [BlogController::class, 'edit_action']);
Route::get('/blog/{id}/hapus', [BlogController::class, 'hapus']);

//logout
Route::get('/logout', [AuthController::class, 'logout']);
});
//end admin
