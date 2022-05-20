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

Route::get('/', [\App\Http\Controllers\JsonController::class, 'getMassive'])->name('home');
Route::post('/', [\App\Http\Controllers\JsonController::class, 'getMassivePost'])->name('posto');


