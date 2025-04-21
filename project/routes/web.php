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

Route::get('/product/{id}', [MainController::class, 'index'])
    ->where('id', '[0-9]+');
Route::post('/product/{title}/{price}/{description}', [MainController::class, 'addProduct'])
    ->where('price', '[0-9]+')
    ->withoutMiddleware(App\Http\Middleware\VerifyCsrfToken::class);
Route::patch('/product/{id}/{price}', [MainController::class, 'updateProductPrice'])
    ->where('id', '[0-9]+')
    ->where('price', '[0-9]+')
    ->withoutMiddleware(App\Http\Middleware\VerifyCsrfToken::class);
Route::delete('/product/{id}', [MainController::class, 'deleteProduct'])
    ->where('id', '[0-9]+')
    ->withoutMiddleware(App\Http\Middleware\VerifyCsrfToken::class);

