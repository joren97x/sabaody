<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RoomController;

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

Route::post('/logout', [ViewController::class, 'logout']);

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/view-rooms', [AdminController::class, 'view_rooms']);
Route::get('/admin/view-employees', [AdminController::class, 'view_employees']);
Route::get('/admin/add-rooms', [AdminController::class, 'add_rooms']);
Route::get('/admin/add-employees', [AdminController::class, 'add_employees']);
Route::get('/admin/successful', [AdminController::class, 'successful']);
Route::get('/admin/declined', [AdminController::class, 'declined']);
Route::get('/admin/reports', [AdminController::class, 'reports']);
Route::post('/admin/store-room', [RoomController::class, 'store']);

