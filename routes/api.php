<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('orders', [OrderController::class, 'index'])->name('orders'); //get all orders
    Route::get('orders/{order:order_number}', [OrderController::class, 'get'])->name('orders.get'); //get specific order by order number
        Route::post('orders', [OrderController::class, 'post'])->name('orders.post'); //post order


/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
return $request->user();
});
*/