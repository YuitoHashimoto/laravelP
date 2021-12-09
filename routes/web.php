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

// 作品一覧を表示
Route::get('/works', [WorkController::class, 'showList'])->name('works');

// 作品登録画面を表示
Route::get('/works/create', [WorkController::class, 'showCreate'])->name('create');

// 作品登録
Route::post('/works/store', [WorkController::class, 'exeStore'])->name('store');


// 作品詳細を表示
Route::get('/works/{id}', [WorkController::class, 'showDetail'])->name('show');