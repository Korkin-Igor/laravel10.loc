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
    dump(app('view'));

    //  кладём в кэш 'name' => 'Igor'

    $cache = app()->make('cache');
//    $cache->put('name', 'Igor');


    return $cache->get('name');
});
