<?php

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


Route::get('/index', [App\Http\Controllers\MoviesController::class, 'index'])->name('movies.index');
Route::get('/', [App\Http\Controllers\MoviesController::class, 'index'])->name('movies.index');
Route::get('/contact', function () {
    return view('layouts.contact');
});


Auth::routes();

//Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/{title}/{poster_path}/{date}', [App\Http\Controllers\HomeController::class, 'create'])->name('home');

