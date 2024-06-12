<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController; // Hanya impor sekali di sini

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

Route::get('/greeting', function () {
    $a = 1;
    $b = 3;
    $c = $a + $b;
    return 'Hello Baby ' . $c;
});

// User Controller
use App\Http\Controllers\UserController;

Route::get('/user', [UserController::class, 'index']);

// Guest Controller
use App\Http\Controllers\GuestController;

Route::get('/guest', [GuestController::class, 'index']);
Route::get('/guest/insert', [GuestController::class, 'insert']);
Route::get('/guest/update', [GuestController::class, 'update']);
Route::get('/guest/delete', [GuestController::class, 'delete']);

// Produk Controller
use App\Http\Controllers\ProdukController;

Route::resource('produk', ProdukController::class);

// Login Controller
Route::get('/login', [LoginController::class, 'halamanLogin'])->name('login');
Route::post('/login', [LoginController::class, 'postLogin'])->name('postLogin');
