<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myAPI;
use App\Http\Controllers\DeviceController;

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

Route::get('data',[myAPI::class, 'getData']);
// Route::get('list',[DeviceController::class, 'list']);
Route::get('list/{id?}',[DeviceController::class, 'list']);
Route::get('list/{name?}',[DeviceController::class, 'getListByName']);
Route::post('add',[DeviceController::class, 'add']);
Route::put('update',[DeviceController::class, 'update']);