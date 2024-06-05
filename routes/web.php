<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenerimaBansosController;

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
    return view('index');
})->name('home');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('ceklogin', [AuthController::class, 'login'])->name('ceklogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');


Route::resource('/penerima/bansos', PenerimaBansosController::class);