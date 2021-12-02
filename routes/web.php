<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;

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

// index
Route::get('/', function () {
    return view('index');
});

// about
Route::get('/about', function () {
    return view('about');
});

//woksList
Route::get('/works', [WorkController::class, 'showList'])->name('works');

// workDetail
Route::get('/works/{id}', [WorkController::class, 'showDetail'])->name('show');