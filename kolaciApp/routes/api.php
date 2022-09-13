<?php

use App\Http\Controllers\PorudzbinaController;
use App\Http\Controllers\ProizvodController;
use Illuminate\Http\Request;
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


Route::get('proizvodi', [ProizvodController::class, 'index']);
Route::get('proizvodi/{id}', [ProizvodController::class, 'show']);

Route::get('porudzbine', [PorudzbinaController::class, 'index']);
Route::get('porudzbine/{id}', [PorudzbinaController::class, 'show']);
Route::delete('porudzbine/{id}', [PorudzbinaController::class, 'destroy']);
Route::put('porudzbine/{id}', [PorudzbinaController::class, 'update']);

Route::post('/porudzbine', [PorudzbinaController::class, 'store']);

