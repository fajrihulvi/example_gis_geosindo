<?php

use App\Http\Controllers\DataSpasialController;
use App\Http\Controllers\JenisSpasialController;
use App\Http\Controllers\KategoriSpasialController;
use App\Http\Controllers\KolomLainnyaController;
use Illuminate\Support\Facades\Route;
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


Route::get('/', [KategoriSpasialController::class, 'index']);
Route::post('/kategori/store', [KategoriSpasialController::class, 'store']);
Route::post('/kategori/update/{id}', [KategoriSpasialController::class, 'update']);
Route::get('/kategori/delete/{id}', [KategoriSpasialController::class, 'destroy']);

Route::get('/jenis/spasial/{id}', [JenisSpasialController::class, 'index']);
Route::post('/jenis/spasial/store', [JenisSpasialController::class, 'store']);
Route::post('/jenis/spasial/update/{id}', [JenisSpasialController::class, 'update']);
Route::get('/jenis/spasial/delete/{id}', [JenisSpasialController::class, 'destroy']);

Route::post('/kolom/lainnya/store', [KolomLainnyaController::class, 'store']);
Route::get('/kolom/lainnya/delete/{id}', [KolomLainnyaController::class, 'destroy']);

Route::get('/data/spasial/{id}', [DataSpasialController::class, 'index']);
Route::post('/data/spasial/store', [DataSpasialController::class, 'store']);
Route::post('/data/spasial/update/{id}', [DataSpasialController::class, 'update']);
Route::get('/data/spasial/delete/{id}', [DataSpasialController::class, 'destroy']);