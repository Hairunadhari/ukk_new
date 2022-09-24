<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\ResepsionisController;

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
    return view('user.home');
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
Route::get('/struk', function () {
    return view('user.struk');
});









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware'=>['isAdmin','auth']], function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.dashboard');  
    Route::get('/kamar',[KamarController::class,'index'])->name('kamar');
Route::post('/simpan-kamar',[KamarController::class,'masukin_data'])->name('simpan-kamar');
Route::post('/edit-simpan/{id}',[KamarController::class,'editsimpan'])->name('edit-simpan');
Route::get('/delete/{id}',[KamarController::class,'delete'])->name('deletekamar');

// fasilitas
Route::get('/fasilitas',[FasilitasController::class,'index'])->name('fasilitas');
Route::post('/simpan-fasilitas',[FasilitasController::class,'masukin_data'])->name('simpan-fasilitas');
Route::post('/edit-fasilitas/{id}',[FasilitasController::class,'editsimpan'])->name('edit-fasiliats');
Route::get('/delete-fasilitas/{id}',[FasilitasController::class,'delete'])->name('delete-fasilitas');

    
});

// Route::get('/resepsionis', function () {
//     return view('resepsionis/dashboard');
// });
Route::group(['prefix' => 'resepsionis', 'middleware'=>['isResepsionis','auth']], function(){
    Route::get('resepsionis',[ResepsionisController::class,'index'])->name('resepsionis.dashboard');
    // Route::get('user-home',[UserController::class,'index']);
    // Route::get('user-kamar',[UserController::class,'index']);
});


// home
Route::get('/user-kamar', function () {
    return view('user.kamar');
});
//fasilitas//
Route::get('/user-fasilitas', function () {
    return view('user.fasilitas');
});
// Pembayaran //
Route::get('/user-pembayaran', function () {
    return view('user.pembayaran');
});

// Kamar -> isi kamarnya //
Route::get('/user-isikamarmawar', function () {
    return view('user.isikamarmawar');
});

Route::get('/user-isikamarmelati', function () {
    return view('user.isikamarmelati');
});

Route::get('/user-isikamarmatahari', function () {
    return view('user.isikamarmatahari');
});

Route::get('/user-isikamarkenanga', function () {
    return view('user.isikamarkenanga');
});
