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

Auth::routes();

Route::get('/reata', [App\Http\Controllers\ReataController::class, 'index'])->name('reata.index');
Route::post('/reata', [App\Http\Controllers\ReataController::class,'create'])->name('reata.create');
Route::get('/reata/nuevo', [App\Http\Controllers\ReataController::class,'new'])->name('reata.new');
Route::get('/reata/{reata}', [App\Http\Controllers\ReataController::class,'show'])->name('reata.show');
Route::post('/reata/{reata}', [App\Http\Controllers\ReataController::class,'edit'])->name('reata.edit');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
