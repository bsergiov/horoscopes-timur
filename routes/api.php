<?php

use App\Http\Controllers\Api\ApiController;
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

# En Version
Route::get('/en/articles', [ApiController::class, "enAllArticles"]);
Route::get('/en/articl/{id}', [ApiController::class, "enIdArticl"]);
Route::get('/en/sign/{sign}', [ApiController::class, "enSignArticl"]);
Route::get('/en/category/{category}', [ApiController::class, "enCategoryArticl"]);
Route::get('/en/taro', [ApiController::class, "enTaro"]);
Route::get('/en/overall', [ApiController::class, "enOverall"]);
Route::get('/en/overall/{id}', [ApiController::class, "enOver"]);
Route::post('/en/compliant/', [ApiController::class, "encompliant"]);

# Ru Version

Route::get('/ru/articles', [ApiController::class, "ruAllArticles"]);
Route::get('/ru/articl/{id}', [ApiController::class, "ruIdArticl"]);
Route::get('/ru/sign/{sign}', [ApiController::class, "ruSignArticl"]);
Route::get('/ru/category/{category}', [ApiController::class, "ruCategoryArticl"]);
Route::get('/ru/taro', [ApiController::class, "ruTaro"]);
Route::get('/ru/overall', [ApiController::class, "ruOverall"]);
Route::get('/ru/overall/{id}', [ApiController::class, "ruOver"]);
Route::post('/ru/compliant/', [ApiController::class, "rucompliant"]);
