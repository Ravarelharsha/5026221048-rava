<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\HandphoneController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/error', function () {
    return "<h1>Server Error : Ada Kesalahan di Server</h1>";
});

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/blog2', [DosenController::class, 'blog']);
Route::get('/biodata', [DosenController::class, 'biodata']);

// Uncomment this line if you want to use the dynamic route for 'pegawai/{nama}'
// Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/business', function () {
    return view('business');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/sercen', function () {
    return view('sercen');
});

// Assignment routes
Route::get('/assignments/tugas1', [AssignmentController::class, 'tugas1']);
Route::get('/assignments/responsive1', [AssignmentController::class, 'responsive1']);
Route::get('/assignments/tugas3', [AssignmentController::class, 'tugas3']);
Route::get('/assignments/hello', [AssignmentController::class, 'hello']);
Route::get('/assignments/tugas4', [AssignmentController::class, 'tugas4']);


Route::get('/handphone', [HandphoneController::class, 'index']);
Route::get('/handphone/tambah', [HandphoneController::class, 'tambah']);
Route::post('/handphone/store', [HandphoneController::class, 'store']);

Route::get('/handphone/edit/{kodelaptop}', [HandphoneController::class, 'editGet']);
Route::post('/handphone/edit/{kodelaptop}', [HandphoneController::class, 'editPost']);
Route::delete('/handphone/hapus/{kodelaptop}', [HandphoneController::class, 'delete']);
