<?php

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\IdolController;
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

Route::get('/', function () {
    return redirect()->route('agency.index');
});

Route::resource('agency', AgencyController::class);
Route::resource('idol', IdolController::class);
