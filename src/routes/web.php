<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ContactController::class, 'index']);
Route::get('/contacts/confirm2', [ContactController::class, 'confirm2']);
Route::post('/contacts/confirm2', [ContactController::class, 'confirm2']);
Route::get('/contacts', [ContactController::class, 'store2']);
Route::post('/contacts', [ContactController::class, 'store2']);


//失敗
Route::get('/management', [ContactController::class, 'management']);
Route::get('/todos/search', [ContactController::class, 'search2']);
Route::post('/todos/search', [ContactController::class, 'search2']);
