<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/items',[ItemController::class, 'index'])->name('items.index');
Route::get('/items/create',[ItemController::class, 'create'])->name('items.create');
Route::post('/items',[ItemController::class, 'store'])->name('items.store');


Route::post('/makeOrder/{itemID}',[OrderController::class, 'store'])->name('orders.store');
Route::put('/updateOrder/{order}',[OrderController::class, 'update'])->name('orders.update');


