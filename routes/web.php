<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBarangController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data_barang/{id}',[DataBarangController::class, 'Index']);

Route::get('/create', [DataBarangController::class, 'create']);
Route::post('/store', [DataBarangController::class, 'store']);
Route::get('/hasil',[DataBarangController::class, 'index']);
Route::get('/delete_test/{id}',[DataBarangController::class, 'hapus_get']);

Route::get('/utama', function () {
    return view('list_Inventorys');
});
Route::get('/delete/{id}', [DataBarangController::class, 'destroy']);
Route::get('/edit/{id}', [DataBarangController::class, 'edit']);
Route::post('/update/{id}', [DataBarangController::class, 'update']);

