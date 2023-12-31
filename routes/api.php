<?php

use App\Http\Controllers\CardController;
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

Route::get('get_data',[CardController::class, 'getData']);
Route::post('add_data',[CardController::class, 'addData']);
Route::put('update_data',[CardController::class, 'updateData']);
Route::delete('delete_data/{id}',[CardController::class, 'deleteData']);
