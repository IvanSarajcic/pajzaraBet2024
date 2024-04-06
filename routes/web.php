<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeamController;
use App\Http\Controllers\FootballMatchController;
use App\Http\Controllers\VenuesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {return view('welcome');});

Route::get('/teams', [TeamController::class, 'index']);
Route::get('/matches', [FootballMatchController::class, 'index']);
Route::get('/venues', [VenuesController::class, 'index']);
