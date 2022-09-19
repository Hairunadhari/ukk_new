<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamarController;

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

// kamar
Route::get('/kamar',[KamarController::class,'index'])->name('kamar');
Route::post('/simpan-kamar',[KamarController::class,'masukin_data'])->name('simpan-kamar');
Route::post('/edit-simpan/{id}',[KamarController::class,'editsimpan'])->name('edit-simpan');
Route::get('/delete/{id}',[KamarController::class,'delete'])->name('deletekamar');

// fasilitas
Route::get('/fasilitas',[KamarController::class,'index'])->name('fasilitas');
Route::post('/simpan-fasilitas',[KamarController::class,'masukin_data'])->name('simpan-fasilitas');
Route::post('/edit-fasilitas/{id}',[KamarController::class,'editsimpan'])->name('edit-fasiliats');
Route::get('/delete-fasilitas/{id}',[KamarController::class,'delete'])->name('deletefasilitas');