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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    // если исследовать страницу, то там будет только мой html-код
    return '<h1>Главная</h1>';
});

Route::get('/profile', function () {
    // view сама генерирует <!doctype html>.......
    return view('profile', ['user' => 'admin']);
});

Route::get('/product/{id}', function ($id) {
    return "Товар №$id";
})->where('id', '[0-9]+');
