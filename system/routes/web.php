<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\AuthController;
use App\http\Controllers\ProdukController;
use App\http\Controllers\UserController;


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
    return view('welcome');
});

Route::get('template', [HomeController::class, 'showtemplate']);
Route::get('index', [HomeController::class, 'showindex']);
Route::get('kategori', [AuthController::class, 'showKategori']);
Route::get('login', [AuthController::class, 'showlogin']);
Route::post('login', [AuthController::class, 'loginprocess']);

Route::get('register',function(){
	return view('register');
});

Route::get('logout',function(){
	return view('logout');
});

Route::get('informatika',function(){
	return view('informatika');
});

Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{user}', [UserController::class, 'show']);
Route::get('user/{user}/edit', [UserController::class, 'edit']);
Route::put('user/{user}', [UserController::class, 'update']);
Route::delete('user/{user}', [UserController::class, 'destroy']);
