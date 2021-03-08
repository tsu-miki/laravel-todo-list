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

// ToDo一覧画面の表示
Route::get('/', 'App\Http\Controllers\PostController@showList')->name('posts');

// ToDo登録画面の表示
Route::get('/post/create', 'App\Http\Controllers\PostController@showCreate')->name('create');

// ToDo登録機能
Route::post('/post/register', 'App\Http\Controllers\PostController@exeRegister')->name('register');

// ToDo編集画面の表示
Route::get('/post/edit/{id}', 'App\Http\Controllers\PostController@showEdit')->name('edit');

// ToDo編集機能
Route::post('/post/update', 'App\Http\Controllers\PostController@exeUpdate')->name('update');

// ToDo削除機能
Route::post('/post/delete/{id}', 'App\Http\Controllers\PostController@exeDelete')->name('delete');