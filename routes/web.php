<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PredictionController;
use App\Http\Controllers\RankingController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/', [RankingController::class, 'index']);
Route::post('/predict', [PredictionController::class, 'store']);
Route::get('/ranking', [RankingController::class, 'ranking']);
Route::get('/api/rankings', [RankingController::class, 'getRankings']);
