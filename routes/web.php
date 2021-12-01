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

// index
Route::get('/', function () {
    return view('index');
});

// about
Route::get('/about', function () {
    return view('about');
});

// works
// Route::get('/works', function () {
//     return view('works');
// });

//woksList
Route::get('/works', 'WorkController@showList')->name('works');