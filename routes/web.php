<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestRouteController;
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
    return view('welcome');
});

Route::get('/get', [TestRouteController::class, 'postRequest'])->name('get');

Route::get('/check', ['as' => 'middle', 'middleware' => 'adult', function () {
    return view('age_approved');
}]);

Route::get('/check', function () {
    return view('age_approved');
})->middleware('age');

Route::get('/home', [HomeController::class, 'index'])->name('first_name');