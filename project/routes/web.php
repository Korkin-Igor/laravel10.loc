<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::prefix('admin')->group(function () {

    Route::get('/post/{id?}', function ($id = 0) { //необязательный аргумент
        return "Post number $id";
    })->where('id', '[0-9]+');

    Route::get('/posts', function () {
       return 'Posts';
    });

    Route::any('/{any}', function () {
        return 'Admin page not found!';
    })->where("any", ".*");
});

Route::any('/{any}', function () {
    // json ответ
    return response()->json(['message' => 'Any page not found!']);
})->where("any", ".*");
