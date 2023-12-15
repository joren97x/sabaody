<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

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

