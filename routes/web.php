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

Route::get('/', function () {
    return view('welcome');
});

//基本動作：傳參數給view﹙視圖﹚
Route::get('/', function () {
    $name = 'edge';
    $say  = 'Hello!';
    return view('welcome', compact('name', 'say'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//透過路由結合視圖新增一個頁面
//設定完後，到resources/views新增目錄exam，底下新增檔案create.blade.php
Route::get('/exam/create', function () {
    return view('exam.create');
})->name('exam.create');
