<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/categories/create', [App\Http\Controllers\CategoryController::class, 'create']);
Route::post('/categories', [App\Http\Controllers\CategoryController::class, 'store']);
Route::get('/categories/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit']);
Route::patch('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'update']);
Route::delete('/categories/{id}', [App\Http\Controllers\CategoryController::class, 'destroy']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\PelangganController::class, 'store']);
Route::get('/pelanggan/edit/{id}', [App\Http\Controllers\PelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'destroy']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index']);
Route::get('/menu/create', [App\Http\Controllers\MenuController::class, 'create']);
Route::post('/menu', [App\Http\Controllers\MenuController::class, 'store']);
Route::get('/menu/edit/{id}', [App\Http\Controllers\MenuController::class, 'edit']);
Route::patch('/menu/{id}', [App\Http\Controllers\MenuController::class, 'update']);
Route::delete('/menu/{id}', [App\Http\Controllers\MenuController::class, 'destroy']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pesanan', [App\Http\Controllers\PesananController::class, 'index']);
Route::get('/pesanan/create', [App\Http\Controllers\PesananController::class, 'create']);
Route::post('/pesanan', [App\Http\Controllers\PesananController::class, 'store']);
Route::get('/pesanan/edit/{id}', [App\Http\Controllers\PesananController::class, 'edit']);
Route::patch('/pesanan/{id}', [App\Http\Controllers\PesananController::class, 'update']);
Route::delete('/pesanan/{id}', [App\Http\Controllers\PesananController::class, 'destroy']);

