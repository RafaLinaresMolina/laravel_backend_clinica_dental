<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::group(['middleware' => ['forceJsonHeader']], function () {
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });

    // Auth Domain: Create User, Login and Logout
    Route::post('auth/login', [AuthController::class, 'login'])->name('login');
    Route::post('auth/register', [AuthController::class, 'store'])->name('register');
    Route::middleware('auth:api')->get('/auth/logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::middleware('auth:api', 'role:0')->get('/user/{id}', [UserController::class, 'show']);
    Route::middleware('auth:api', 'role:0')->post('/user/{id}', [UserController::class, 'store']);
    Route::middleware('auth:api', 'role:0')->put('/user/{id}', [UserController::class, 'update']);
    Route::middleware('auth:api', 'role:0')->delete('/user/{id}', [UserController::class, 'destroy']);

    Route::middleware('auth:api')->get('/profile', [ProfileController::class, 'show']);
    Route::middleware('auth:api')->put('/profile', [ProfileController::class, 'update']);
    Route::middleware('auth:api')->delete('/profile', [ProfileController::class, 'destroy']);

    
    Route::middleware('auth:api', 'role:0')->get('/users', [UserController::class, 'index']);
    
});
