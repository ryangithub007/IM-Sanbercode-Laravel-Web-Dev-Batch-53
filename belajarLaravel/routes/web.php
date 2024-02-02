<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CastController;

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

// CRUD Cast

// C -> Create Data
// mengarahkan ke halaman form untuk menambah data cast
Route::get('/cast/create', [CastController::class, "create"]);
// memasukkan data cast ke database
Route::post('/cast', [CastController::class, "store"]);

// R -> Read Data
// Menampilkan seluruh cast
Route::get('/cast', [CastController::class, "index"]);
// Menampilkan data cast berdasarkan ID
Route::get('/cast/{id}', [CastController::class, "show"]);

// U -> Update Data
// Mengarahkan ke halaman update cast
Route::get('/cast/{id}/edit', [CastController::class, "edit"]);
// Mengubah data ke database berdasarkan ID
Route::put('/cast/{id}', [CastController::class, "update"]);

// D -> Delete Data
// Menghapus data dari database berdasarkan ID
Route::delete('/cast/{id}', [CastController::class, "destroy"]);

