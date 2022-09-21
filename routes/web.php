<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\FasilitasController;

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
Route::get('/admin', function () {
    return view('template/app');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/resepsionis', function () {
    return view('resepsionis/dashboard');
});

// kamar
Route::get('/kamar',[KamarController::class,'index'])->name('kamar');
Route::post('/simpan-kamar',[KamarController::class,'masukin_data'])->name('simpan-kamar');
Route::post('/edit-simpan/{id}',[KamarController::class,'editsimpan'])->name('edit-simpan');
Route::get('/delete/{id}',[KamarController::class,'delete'])->name('deletekamar');

// fasilitas
Route::get('/fasilitas',[FasilitasController::class,'index'])->name('fasilitas');
Route::post('/simpan-fasilitas',[FasilitasController::class,'masukin_data'])->name('simpan-fasilitas');
Route::post('/edit-fasilitas/{id}',[FasilitasController::class,'editsimpan'])->name('edit-fasiliats');
Route::get('/delete-fasilitas/{id}',[FasilitasController::class,'delete'])->name('delete-fasilitas');

Route::get('/user', function () {
    return view('user.home');
});

Route::get('/user-kamar', function () {
    return view('user.kamar');
});

Route::get('/user-home', function () {
    return view('user.home');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
