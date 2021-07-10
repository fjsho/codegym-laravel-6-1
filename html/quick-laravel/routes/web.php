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

//下記の一行は最初から入っていたが、このパスだとエラーが出る。当該ファイルには
//https://python-konbu.hateblo.jp/entry/2020/10/24/034036（参考）
//use Illuminate\Routing\Route;

//正しくは下記のパス。ただ、ここで宣言しなくても、web.phpは、RouteServiceProvider.phpから先に呼び出される形になっており、そこで同じuse宣言がされているため、この宣言がなくても動く。

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

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
Route::get('hello/list2','HelloController@list2');
Route::get('view/escape','ViewController@escape');
Route::get('view/if','ViewController@if');
Route::get('view/isset','ViewController@isset');
Route::get('view/switch','ViewController@switch');
Route::get('view/while','ViewController@while');
Route::get('view/for','ViewController@for');
Route::get('view/foreach_assoc','ViewController@foreach_assoc');
Route::get('view/foreach_loop','ViewController@foreach_loop');
Route::get('view/master','ViewController@master');
//Route::get('view/comp','ViewController@comp');
Route::get('view/list','ViewController@list');
Route::get('route/param/{id?}','RouteController@param')
->where(['id' => '[0-9]{2,3}']);
//アクションの省略（ビューの直接指定）
Route::view('view/comp','view.comp',[]);
//リダイレクト
route::redirect('/hoge','/');
//フォールバックルート（一番末尾に配置する）
Route::fallback(function(){
    return view('route.error');
});