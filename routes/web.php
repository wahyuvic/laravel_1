<?php

use App\Http\Controllers\contoh_controller;
use App\Http\Controllers\crudcontroller;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homejamurjaya;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/halo', function () {
    return "halo bos";
});

Route::get('/', [crudcontroller::class,'index']);
Route::get('/read', [crudcontroller::class,'read']);
Route::get('/store', [crudcontroller::class,'store']);
Route::get('/create', [crudcontroller::class,'create']);
Route::get('/show/{id}', [crudcontroller::class,'show']);
Route::get('/update/{id}', [crudcontroller::class,'update']);
Route::get('/destroy/{id}', [crudcontroller::class,'destroy']);

//////////////
Route::get('/home', [homejamurjaya::class,'index']);
Route::get('/home/show', [homejamurjaya::class,'show_html']);
Route::get('/home/blade', [homejamurjaya::class,'belajar_blade']);
Route::get('/home/layout', [homejamurjaya::class,'penggunaan_layout']);

Route::get('/home/contoh', [homejamurjaya::class,'contoh']);
Route::post('/home/contoh', [homejamurjaya::class,'contoh_post']);

// Route::get('/contoh', [contoh_controller::class,'index']);
// Route::get('/contoh/create', [contoh_controller::class,'create']);
// Route::post('/contoh/create', [contoh_controller::class,'store']);
Route::resource('contoh',contoh_controller::class);
Route::resource('pegawai',PegawaiController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/register', [App\Http\Controllers\HomeController::class, 'register']);
// Route::get('/create_register', [App\Http\Controllers\Auth\RegisterController::class, 'create_register']);