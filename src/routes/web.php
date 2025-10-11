<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAction\RegistController;

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

Route::post('/main', function () {
    return view('main/main');
});

Route::get('/main', function () {
    return view('main/main');
});

Route::get('/regist', function () {
    return view('userAuticate/regist');
});

Route::post('/regist/Action', [RegistController::class, 'regist']);;
