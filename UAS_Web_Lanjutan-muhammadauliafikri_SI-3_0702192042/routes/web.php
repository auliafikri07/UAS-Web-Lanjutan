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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index']);
Route::get('/siswa/create', [App\Http\Controllers\SiswaController::class, 'create']);
Route::post('/siswa', [App\Http\Controllers\SiswaController::class, 'store']);
Route::get('/siswa/{id}/edit', [App\Http\Controllers\SiswaController::class, 'edit']);
Route::patch('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'update']);
Route::delete('/siswa/{id}', [App\Http\Controllers\SiswaController::class, 'destroy']);
Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index']);
Route::get('/guru/create', [App\Http\Controllers\GuruController::class, 'create']);
Route::post('/guru', [App\Http\Controllers\GuruController::class, 'store']);
Route::get('/guru/{id}/edit', [App\Http\Controllers\GuruController::class, 'edit']);
Route::patch('/guru/{id}', [App\Http\Controllers\GuruController::class, 'update']);
Route::delete('/guru/{id}', [App\Http\Controllers\GuruController::class, 'destroy']);
Route::get('/kepsek', [App\Http\Controllers\KepsekController::class, 'index']);
Route::get('/kepsek/create', [App\Http\Controllers\KepsekController::class, 'create']);
Route::post('/kepsek', [App\Http\Controllers\KepsekController::class, 'store']);
Route::get('/kepsek/{id}/edit', [App\Http\Controllers\KepsekController::class, 'edit']);
Route::patch('/kepsek/{id}', [App\Http\Controllers\KepsekController::class, 'update']);
Route::delete('/kepsek/{id}', [App\Http\Controllers\KepsekController::class, 'destroy']);