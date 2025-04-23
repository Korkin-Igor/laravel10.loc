<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function() {
//    return view('welcome');
//});

Route::post('/create', [MainController::class, 'index'])
    ->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

Route::post('/read', [MainController::class, 'read'])
    ->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

Route::post('/update', [MainController::class, 'update'])
    ->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

Route::post('/delete', [MainController::class, 'delete'])
    ->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

