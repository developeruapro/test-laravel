<?php

use App\Http\Actions\Review\AddAction;
use App\Http\Actions\Review\ListAction;
use App\Http\Actions\Config\GetAction;
use App\Http\Actions\Config\SetAction;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'helloWord']);

Route::get("/api/review", [ListAction::class, 'execute']);
Route::post("/api/review", [AddAction::class, 'execute']);

Route::get("/api/config", [GetAction::class, 'execute']);
Route::post("/api/config", [SetAction::class, 'execute']);
