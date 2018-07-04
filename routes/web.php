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

//mvc寫法，路由透過控制器呼叫視圖，搭配app/HTTP/Controllers/ExamController.php
Route::get('/exam', 'ExamController@index')->name('exam.index');
Route::get('/exam/create', 'ExamController@create')->name('exam.create');
Route::post('/exam', 'ExamController@store')->name('exam.store');


//day1寫法
//透過路由結合視圖新增一個頁面
//設定完後，到resources/views新增目錄exam，底下新增檔案create.blade.php
// Route::get('/exam/create', function () {
//     return view('exam.create');
// })->name('exam.create');
