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

// ↓デフォルトでは以下のコードが出力されている。
//  不要なのでコメントアウト。
/*
Route::get('/', function () {
    return view('welcome');
});
*/

// ↓以下を追加。
Route::get('/', 'TopController@index');
