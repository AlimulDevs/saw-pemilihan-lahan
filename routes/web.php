<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PenilaianController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Controller::class, "homeIndex"]);
Route::get('/alternatif/index', [AlternatifController::class, "index"]);
Route::post('/alternatif/create', [AlternatifController::class, "create"]);
Route::post('/alternatif/edit', [AlternatifController::class, "edit"]);
Route::get('/alternatif/delete/{id}', [AlternatifController::class, "delete"]);



Route::get('/hitung/index', [HitungController::class, "index"]);



Route::get('/kriteria/index', [KriteriaController::class, "index"]);
Route::post('/kriteria/create', [KriteriaController::class, "create"]);
Route::get('/kriteria/delete', [KriteriaController::class, "delete"]);

Route::get('/penilaian/index', [PenilaianController::class, "index"]);
Route::get('/penilaian/delete/{id}', [PenilaianController::class, "delete"]);
Route::post('/penilaian/create', [PenilaianController::class, "create"]);
