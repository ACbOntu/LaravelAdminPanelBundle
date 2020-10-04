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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/find/{id}',['App\Http\Controllers\DemoModelController','index']);
Route::get('/show',['App\Http\Controllers\DemoModelController','index']);
//Route::post('/show',['App\Http\Controllers\DemoModelController','index'])->name('store');
//Route::post('/post/{$id}',['App\Http\Controllers\DemoModelController','index'])->name('store');
//Route::view('/form','form');
