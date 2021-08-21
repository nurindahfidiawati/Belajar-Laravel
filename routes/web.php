<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

//Versi Mbk Indah

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});


//Versi Agung

//Langsung memanggil pada view blade
Route::view('/', 'pages.index');
Route::view('/dashboard', 'pages.dashboard');

//Memanggil view dengan controller
Route::get('/', [AuthController::class, 'index'])->name("login");
Route::get('/dashboard', [HomeController::class, 'index'])->name("dashboard");

