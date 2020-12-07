<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Router;
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

Route::get('/', function(){
    return response()->json(['message' => 'up and running!'], 200);
});
// Auth Domain: Create User, Login and Logout
Route::post('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/register', [AuthController::class, 'store'])->name('register');

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');

    // ADMIN ROUTES
    Route::group(['middleware' => ['role:0']], function () {
        // User
        Route::get('/users', [UserController::class, 'index']);
        Route::get('/user/{id}', [UserController::class, 'show']);
        Route::post('/user/{id}', [UserController::class, 'store']);
        Route::put('/user/{id}', [UserController::class, 'update']);
        Route::delete('/user/{id}', [UserController::class, 'destroy']);
        // Appointment
        Route::post('/admin/appointment/create', [AppointmentController::class, 'createAppointmentAccepted']);
        Route::get('/admin/appointments', [AppointmentController::class, 'getAllAppointments']);
        Route::get('/admin/appointments/client/{id}', [AppointmentController::class, 'getAllAppointmentsFromClient']);
        Route::get('/admin/appointments/dentist/{id}', [AppointmentController::class, 'getAllAppointmentsFromDentist']);
        Route::put('/admin/appointment/accept/{id}', [AppointmentController::class, 'acceptAppointmentById']);
        Route::put('/admin/appointment/done/{id}', [AppointmentController::class, 'doneAppointmentById']);
        Route::delete('/admin/appointment/{id}', [AppointmentController::class, 'cancelAppointmentById']);
    });

    // PROFILE ROUTES
    Route::get('/profile', [ProfileController::class, 'show']);
    Route::put('/profile', [ProfileController::class, 'update']);
    Route::delete('/profile', [ProfileController::class, 'destroy']);
    // CLIENT ROUTES
    // Appointment
    Route::get('/client/appointments', [AppointmentController::class, 'getUserAppointments']);
    Route::post('/client/appointment', [AppointmentController::class, 'createAppointment']);
    Route::delete('/client/appointment/{id}', [AppointmentController::class, 'cancelUserAppointment']);
});
