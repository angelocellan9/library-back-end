<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;

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
    return view('home');
});

Route::get('/author', [AuthorController::class,'view'])->name('author');
Route::get('/author/create', [AuthorController::class,'create']);
Route::post('/author/create', [AuthorController::class,'store']);
Route::get('/author/{author}', [AuthorController::class,'edit']);
Route::post('/author/{author}', [AuthorController::class,'update']);
Route::delete('author/delete/{author}', [AuthorController::class, 'delete']);

Route::get('/book', [BookController::class,'view'])->name('book');
Route::get('/book/create', [BookController::class,'create']);
Route::post('/book/create', [BookController::class,'store']);
Route::get('/book/{book}', [BookController::class,'edit']);
Route::post('/book/{book}', [BookController::class,'update']);
Route::delete('book/delete/{book}', [BookController::class, 'delete']);

Route::get('/copy', [CopyController::class,'view'])->name('copy');
Route::get('/copy/create', [CopyController::class,'create']);
Route::post('/copy/create', [CopyController::class,'store']);
Route::get('/copy/{copy}', [CopyController::class,'edit']);
Route::post('/copy/{copy}', [CopyController::class,'update']);
Route::delete('copy/delete/{copy}', [CopyController::class, 'delete']);