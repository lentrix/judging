<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\ContestantController;

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
    return view('home');
});

Route::get('/contests',[ContestController::class, 'index']);
Route::get('/contests/create',[ContestController::class, 'create']);
Route::get('/contests/{contest}',[ContestController::class, 'show']);
Route::post('/contests', [ContestController::class, 'store']);
Route::post("/contests/{contest}/contestants", [ContestantController::class, 'store']);
