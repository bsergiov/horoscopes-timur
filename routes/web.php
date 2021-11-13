<?php

use App\Http\Controllers\Admin\EnShowController;
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
Route::resource('/ru', RuShowController::class);
Route::resource('/en', EnShowController::class);

