<?php

use App\Http\Controllers\PengelolaanSuratController;
use App\Models\PengelolaanSurat;
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

Route::get('/', [PengelolaanSuratController::class, 'home'])->name('index');

// register
Route::get('/register', [PengelolaanSuratController::class, 'register'])->name('register');
Route::post('/register', [PengelolaanSuratController::class, 'registerAccount'])->name('register.post');

// login
Route::get('/login', [PengelolaanSuratController::class, 'login'])->name('login');
Route::post('/login', [PengelolaanSuratController::class, 'auth'])->name('login.auth');

// logout
Route::get('/logout', [PengelolaanSuratController::class, 'logout'])->name('logout');