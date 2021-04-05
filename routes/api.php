<?php
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\SumController;
use App\Http\Controllers\PartnersController;
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


Route::prefix('orders')->group(function () {
    Route::get('/orders', [OrdersController::class, 'orders']);
});

Route::prefix('paid')->group(function () {
    Route::get('/paid', [PaymentsController::class, 'payments']);
});

Route::prefix('sum')->group(function () {
    Route::get('/sum', [SumController::class, 'sum']);
});
Route::prefix('partners')->group(function () {
    Route::get('/partners', [PartnersController::class, 'partners']);
});



