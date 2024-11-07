<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColdRoomController;

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


Route::get('/fetch-data', [ColdRoomController::class, 'fetchAndStoreData']);
Route::get('/', [ColdRoomController::class, 'showData']);
Route::get('/show', [ColdRoomController::class, 'showData']);
