<?php

use App\Http\Controllers\ProductCRUDController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/create', [ProductCRUDController::class, 'create']);
Route::get('/product', [ProductCRUDController::class, 'read']);
Route::get('/product/{id}', [ProductCRUDController::class, 'read']);
Route::patch('/product/{id}/update', [ProductCRUDController::class, 'update']);
Route::delete('/product/{id}/delete', [ProductCRUDController::class, 'delete']);

