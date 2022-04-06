<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\ContestantController;
use App\Http\Controllers\SiteController;

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

Route::get('/', [SiteController::class, 'loginForm'])->name('login');
Route::post('/login', [SiteController::class, 'login']);

Route::group(['middleware'=>'auth'], function() {
    Route::get('/home', [SiteController::class, 'home']);
    Route::get('/contests',[ContestController::class, 'index']);
    Route::get('/contests/create',[ContestController::class, 'create']);
    Route::get('/contests/{contest}',[ContestController::class, 'show']);
    Route::post('/contests', [ContestController::class, 'store']);
    Route::post("/contests/{contest}/contestants", [ContestantController::class, 'store']);

    Route::get('/logout',[SiteController::class, 'logout']);
});
