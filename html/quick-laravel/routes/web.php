<?php

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

use Illuminate\Routing\Route;
//「/」に対するルート
Route::get('/', function () {
    return view('welcome');
});
//「/hello」に対するルート
Route::get('hello','HelloController@index');
