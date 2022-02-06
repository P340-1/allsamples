<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GameController;

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

// Статичский метод Route::apiResource, в отличие от метода resource, 
// исключает методы edit и create, оставляя только index, show, store, update, destroy.
// Route::resource('/games', GameController::class)->only([
//    'index', 'show', 'store', 'update', 'destroy'
// ]);
Route::apiResource('/games', GameController::class);
