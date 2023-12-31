<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apicontroller;
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

Route::middleware('auth:sanctum')->post('/user', function (Request $request) {
    return $request->user();
});

// Route::get("add",[Apicontroller::class,'add']);
Route::get("/get", [Apicontroller::class, 'get']);
// Route::post('create', [Device::class, 'create']);
// Route::match(['get', 'post'], 'add', 'Apicontroller@yourMethod');


