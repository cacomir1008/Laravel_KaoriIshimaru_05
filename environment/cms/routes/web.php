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

use App\Book;
use Illuminate\Http\Request;

// コントローラー名@メソッド名
// ダッシュボード表示
Route::get('/', 'BooksController@index');

// カテゴリ別ページ
// 仕事の悩み
Route::get('/category0', 'BooksController@index2');
// 家庭の悩み
Route::get('/category1', 'BooksController@index3');
// 自分の悩み
Route::get('/category2', 'BooksController@index4');

//登録処理
Route::post('/books','BooksController@store');

//更新画面
Route::post('/booksedit/{books}', 'BooksController@edit');
    
//更新処理
Route::post('/books/update','BooksController@update');

//本を削除
Route::delete('/book/{book}', 'BooksController@destroy');

// ログイン認証を呼び出すコマンド
Auth::routes();
Route::get('/home', 'BooksController@index')->name('home');

