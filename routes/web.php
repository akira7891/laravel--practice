<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get/{id?}', function ($x=12) {return "<html><h1>{$x}</h1></html>";} );
//ルートパラメータを任意パラメータに設定　
//ルートパラメータに何も入力しなかった場合はあらかじめ設定しておける。
//設定せずに、ルートパラメータに何も何も入力せずアクセスするとエラーになる
