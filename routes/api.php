<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\BookStatusController;
use App\Http\Controllers\Api\AuthorController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('books', BookController::class)->only(['index']);
Route::apiResource('book_statuses', BookStatusController::class)->only(['index']);
Route::apiResource('authors', AuthorController::class)->only(['index']);
