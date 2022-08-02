<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KeluarController;

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
    return view('template.master');
});

Route::get('barang',[BarangController::class,'index'])->name('barang');
Route::post('barang/tambah',[BarangController::class,'store']);
Route::get('barang/create',[BarangController::class,'create']);
Route::get('barang/hapus/{id}',[BarangController::class,'destroy']);
Route::post('barang/modify',[BarangController::class,'update']);
Route::get('barang/edit/{id}',[BarangController::class,'edit']);