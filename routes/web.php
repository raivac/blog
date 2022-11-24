<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;

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
    return view('blog');
})->name('blog');

Route::get('inicio', function () {
    return view('inicio');
})->name('inicio');


Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::resource('posts',PostController::class);



// Route::get('index',[PostController::class,'index'])->name('index');

// Route::get('post/{id?}',[PostController::class,'show']) ->where('id', "[0-9]+");

// Route::get('crear',[PostController::class,'create'])->name('crear');

// Route::get('ediar',[PostController::class,'edit'])->name('editar');




