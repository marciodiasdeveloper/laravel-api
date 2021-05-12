<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\v1\Auth\AuthenticateController;

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

Route::prefix('v1')->group(function() {
    Route::post('authenticate/login', [AuthenticateController::class, 'store']);
});

Route::middleware('auth:api')->get('/user-api', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/user-sanctum', function (Request $request) {
    return $request->user();
});
