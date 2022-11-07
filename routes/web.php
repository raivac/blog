<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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


Route::resource('posts',PostController::class)->only(['index','show','create','edit']);

Route::get('/', function () {
    return view('blog');
})->name('blog');

Route::get('posts',[PostController::class,'index'])->name('index');

Route::get('posts/{id?}',[PostController::class,'show']) ->where('id', "[0-9]+")->name('show');


/*
Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

*/
