<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomDEV;


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



Route::match(['get', 'post', 'delete', 'patch'], '/{vue_capture}', function () {
    return view('welcome');
})->where('vue_capture', '.*')->name('MainRoute');







