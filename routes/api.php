<?php

use App\Http\Controllers\Api\ApplicationsController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ManagersController;
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

Route::prefix('auth')->middleware('api')->controller(AuthController::class)->group(function () {

    Route::post('/login', 'login');
    Route::post('/user', 'user');
    Route::post('/logout', 'logout');
    Route::post('/login', 'login');
});


Route::get('/applications', [ApplicationsController::class, 'list']);
Route::post('/applications', [ApplicationsController::class, 'createApp']);




Route::get('/applications', [ManagersController::class, 'list']);
Route::get('/applications/{application}', [ManagersController::class, 'showApp']);
Route::patch('/applications/{application}', [ManagersController::class, 'update']);
