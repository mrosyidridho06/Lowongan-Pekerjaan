<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LokerController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/lowongan', function () {
    return view('layouts.lowongan');
})->middleware(['auth'])->name('lowongan');

Route::get('detail', function () {
    return view('lowongan_pekerjaan.detail');
});

Route::get('list_lowongan', function () {
    return view('list_loker.list_lowongan');
});

Route::resource('loker', lokerController::class);

require __DIR__.'/auth.php';
