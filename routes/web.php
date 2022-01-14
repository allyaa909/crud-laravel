<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/data', [App\Http\Controllers\GuruController::class, 'index']);

Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index']);
// Route::get('/edit/{guru}', [App\Http\Controllers\GuruController::class, 'edits']);
Route::get('/guru/tambah', [App\Http\Controllers\GuruController::class, 'tambah']);
Route::post('/guru/simpan', [App\Http\Controllers\GuruController::class, 'simpan']);
Route::get('/guru/edit/{guru}',[App\Http\Controllers\GuruController::class, 'edits']);
Route::put('/guru/update/{id}', [App\Http\Controllers\GuruController::class, 'update']);
Route::get('/guru/hapus/{id}', [App\Http\Controllers\GuruController::class, 'delete']);
Route::get('/guru/view/{id}', [App\Http\Controllers\GuruController::class, 'tampil']);