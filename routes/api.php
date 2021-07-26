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

Route::middleware('auth:api')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/todos', [App\Http\Controllers\TodosController::class, 'index']);
    Route::post('/todos', [App\Http\Controllers\TodosController::class, 'store']);
    Route::patch('/todos/{todo}', [App\Http\Controllers\TodosController::class, 'update']);
    Route::patch('/todosCheckAll', [App\Http\Controllers\TodosController::class, 'updateAll']);
    Route::delete('/todos/{todo}', [App\Http\Controllers\TodosController::class, 'destroy']);
    Route::delete('/todosDeleteCompleted', [App\Http\Controllers\TodosController::class, 'destroyCompleted']);

    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout']);
});

Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
