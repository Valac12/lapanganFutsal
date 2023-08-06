<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDataController;
use App\Http\Controllers\UserDataController;
use App\Http\Controllers\LapanganController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index', [
        "tittle" => "OurFutsal.ID - Home"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticateUsers']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('admin');

Route::resource('/adminData', AdminDataController::class)->middleware('admin');
Route::resource('/userData', UserDataController::class)->middleware('admin');
// Route::get('/dataAdmin', [AdminController::class, 'index']);
// Route::post('/dataAdmin', [AdminController::class, 'store']);

Route::resource('/dataLapangan', LapanganController::class);
