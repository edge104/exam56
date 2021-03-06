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

/*
宣告id格式只可以是數字，
套用到所有路由
﹙以免exam/create的create也被當成id﹚
後來因為做了路由模型綁定，所以id改成exam了
 */
Route::pattern('exam', '[0-9]+');
Route::pattern('topic', '[0-9]+');

Route::get('/', 'ExamController@index')->name('exam');

//基本動作：傳參數給view﹙視圖﹚
// Route::get('/', function () {
//     $name = 'edge';
//     $say  = 'Hello!';
//     return view('welcome', compact('name', 'say'));
// });

Auth::routes();

Route::get('/home', 'ExamController@index')->name('home.index');

//mvc寫法，路由透過控制器呼叫視圖，搭配app/HTTP/Controllers/ExamController.php
//
//
// 測驗
Route::get('/exam', 'ExamController@index')->name('exam.index');
Route::get('/exam/create', 'ExamController@create')->name('exam.create');
Route::post('/exam', 'ExamController@store')->name('exam.store');
Route::get('/exam/{exam}', 'ExamController@show')->name('exam.show');
Route::get('/exam/{exam}/edit', 'ExamController@edit')->name('exam.edit');
Route::patch('/exam/{exam}', 'ExamController@update')->name('exam.update');
Route::delete('/exam/{exam}', 'ExamController@destroy')->name('exam.destroy');

//
//
// 題目
Route::post('/topic', 'TopicController@store')->name('topic.store');
Route::get('/topic/{topic}/edit', 'TopicController@edit')->name('topic.edit');
Route::patch('/topic/{topic}', 'TopicController@update')->name('topic.update');
Route::delete('/topic/{topic}', 'TopicController@destroy')->name('topic.destroy');

//day1寫法
//透過路由結合視圖新增一個頁面
//設定完後，到resources/views新增目錄exam，底下新增檔案create.blade.php
// Route::get('/exam/create', function () {
//     return view('exam.create');
// })->name('exam.create');
