<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\plasma;
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
    return view('home');
});
Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::view("need","need");
Route::post("/thankyou",'App\Http\Controllers\plasma@plasma');