<?php

use App\Http\Controllers\Admin\EnCategoryController;
use App\Http\Controllers\Admin\EnOverController;
use App\Http\Controllers\Admin\EnPairController;
use App\Http\Controllers\Admin\EnShowController;
use App\Http\Controllers\Admin\EnTaroController;
use App\Http\Controllers\Admin\RuCategoryController;
use App\Http\Controllers\Admin\RuOverController;
use App\Http\Controllers\Admin\RuPairController;
use App\Http\Controllers\Admin\RuTaroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RuShowController;

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
    return view('/welcomePage.index');
});
# Ru rout
Route::resource('/ru', RuShowController::class);
Route::resource('/rucategories', RuCategoryController::class);
Route::resource('/rutaro', RuTaroController::class);
Route::resource('/ruparies', RuPairController::class);
Route::resource('/ruover', RuOverController::class);

# En rout
Route::resource('/en', EnShowController::class);
Route::resource('/encategories', EnCategoryController::class);
Route::resource('/entaro', EnTaroController::class);
Route::resource('/enparies', EnPairController::class);
Route::resource('/enover', EnOverController::class);
