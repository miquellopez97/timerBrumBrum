<?php

use App\Http\Controllers\GamedataController;
use App\Http\Controllers\TimelapController;
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

Route::resource('/timelap', TimelapController::class);
Route::get('/record', [TimelapController::class, 'record']);

Route::resource('/data', GamedataController::class);
