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

//下記の一行は最初から入っていたが、これを有効にするとエラーが出るので注意。原因不明っぽいので講師の方に相談してもいいかも？https://python-konbu.hateblo.jp/entry/2020/10/24/034036（参考）
//use Illuminate\Routing\Route;

//「/」に対するルート
Route::get('/', function () {
    return view('welcome');
});
//「/hello」に対するルート
Route::get('hello','HelloController@index');
    /*
    /   functionで同じことを行うルート
    /   Route::get('hello1',function(){
    /   return 'hello world!!';
    /   });
    */

//「/hello/view」に対するルート
Route::get('hello/view', 'HelloController@view');

Route::get('hello/list','HelloController@list');
