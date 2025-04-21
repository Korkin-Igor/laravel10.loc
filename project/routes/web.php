<?php

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

Route::get('/', function () {
    dump(config('app.name'));
    dump(config('database.connections.pgsql'));
    // стираю в .env значение переменной DB_DATABASE
    dump(config('database.connections.pgsql.database'));
    // В целом тему я понял
});
