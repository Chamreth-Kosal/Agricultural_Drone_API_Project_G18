<?php

<<<<<<< HEAD
use App\Http\Controllers\UserController;
=======
use App\Http\Controllers\DroneController;
use App\Http\Controllers\PlanController;
>>>>>>> 3c64b06d412e164df33b297fde5baf4635567abc
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

<<<<<<< HEAD
//user
Route::resource('/users', UserController::class);
=======
Route::resource('/drones', DroneController::class);
Route::resource('/plans', PlanController::class);
>>>>>>> 3c64b06d412e164df33b297fde5baf4635567abc
