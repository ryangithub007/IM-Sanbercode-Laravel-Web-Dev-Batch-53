<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, "index"]);
Route::get('/welcome', [HomeController::class, "index"]);
Route::get('/master', [HomeController::class, "template"]);

Route::get('/table', [HomeController::class, "formatTable"]);
Route::get('/data-table', [HomeController::class, "contentTable"]);
