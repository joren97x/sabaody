<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StaffController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ViewController::class, 'index']);
Route::get('/rooms/{category}', [ViewController::class, 'rooms']);
Route::get('/report', [ViewController::class, 'report']);
Route::post('/report', [ReportController::class, 'store']);
Route::get('/team', [ViewController::class, 'team']);
Route::get('/book/{room}', [ViewController::class, 'book']);
Route::get('/login', [ViewController::class, 'login']);
Route::get('/login-as-admin', [ViewController::class, 'login_as_admin']);
Route::get('/login-as-staff', [ViewController::class, 'login_as_staff']);
Route::post('/login', [ViewController::class, 'authenticate']);
Route::post('/book', [BookController::class, 'store']);
Route::post('/review/{room}', [ReviewController::class, 'store']);

Route::get('/logout', [ViewController::class, 'logout']);

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/view-rooms', [AdminController::class, 'view_rooms']);
    Route::get('/admin/view-employees', [AdminController::class, 'view_employees']);
    Route::get('/admin/view-employee/{employee?}', [AdminController::class, 'view_employee']);
    Route::get('/admin/add-rooms', [AdminController::class, 'add_rooms']);
    Route::get('/admin/add-employees', [AdminController::class, 'add_employees']);
    Route::get('/admin/successful', [AdminController::class, 'successful']);
    Route::get('/admin/declined', [AdminController::class, 'declined']);
    Route::get('/admin/reports', [AdminController::class, 'reports']);
    Route::post('/admin/store-room', [RoomController::class, 'store']);
    Route::post('/admin/add-employee', [EmployeeController::class, 'store']);
});

Route::middleware(['staff'])->group(function () {
    Route::get('/staff/dashboard', [StaffController::class, 'dashboard']);
    Route::get('/staff/pending', [StaffController::class, 'pending']);
    Route::get('/staff/reserved', [StaffController::class, 'reserved']);
    Route::get('/staff/check-out', [StaffController::class, 'check_out']);
    Route::get('/staff/view-room/{category}', [StaffController::class, 'view_room']);
    Route::get('/staff/successful', [StaffController::class, 'successful']);
    Route::get('/staff/declined', [StaffController::class, 'declined']);
    Route::get('/staff/reports', [StaffController::class, 'reports']);
    Route::put('/staff/approve-reservation', [BookingController::class, 'approve']);
    Route::put('/staff/check-out-reservation', [BookingController::class, 'check_out']);
    Route::put('/staff/check-in-reservation', [BookingController::class, 'check_in']);
    Route::put('/staff/decline-reservation', [BookingController::class, 'decline']);
    Route::put('/staff/fix-report/{report}', [ReportController::class, 'fix']);
    Route::delete('/staff/delete-report/{report}', [ReportController::class, 'destroy']);
});

