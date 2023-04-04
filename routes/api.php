<?php

use App\Http\Controllers\api\ItemController;
use App\Http\Controllers\OrderController;
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


Route::get('/items',[ItemController::class, 'index']);
Route::get('/items/create',[ItemController::class, 'create']);
Route::post('/items',[ItemController::class, 'store']);


Route::post('/makeOrder/{itemID}',[OrderController::class, 'store']);
Route::put('/updateOrder/{order}',[OrderController::class, 'update']);