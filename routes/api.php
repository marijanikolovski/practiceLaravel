<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DataController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get', function () {
    return 'This is get route.';
})->name('get');

Route::post('/post', function () {
    return 'This is post route.';
})->name('post');

Route::put('/put', function () {
    return 'This is put route.';
})->name('put');

Route::patch('/patch', function () {
    return 'This is patch route.';
})->name('patch');

Route::delete('/delete', function () {
    return 'This is delete route.';
})->name('delete');

Route::controller(PostsController::class)->group(
    function () {
        Route::get('/post', 'index');
        Route::get('/post/{id}', 'show');
        Route::post('/create', 'store');
        Route::delete('/post/{id}', 'destroy');
    }
);

Route::post('/auth/login', [AuthController::class, 'login']);

Route::controller(DataController::class)->group(
    function () {
        Route::get('/open', 'open');
        Route::get('/closed', 'closed')->middleware('auth:api');
    }
);