<?php

use App\Http\Controllers\BookController;
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
Route::get('/team', [ViewController::class, 'team']);
Route::get('/book/{room}', [ViewController::class, 'book']);
Route::post('/book', [BookController::class, 'store']);
