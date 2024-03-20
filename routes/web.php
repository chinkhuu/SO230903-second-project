<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.index');
});

Route::get('/second', function () {
    return view('pages.second');
});


Route::get('/third', function () {
    return view('pages.third');
});

Route::get('/', [\App\Http\Controllers\PostController::class,'index']);
