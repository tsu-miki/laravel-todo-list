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

// 一覧画面を表示
Route::get('/', 'App\Http\Controllers\PostController@showList')->name('posts');

// 登録画面を表示
Route::get('/post/create', 'App\Http\Controllers\PostController@showCreate')->name('create');

// ToDoの登録
Route::post('/post/register', 'App\Http\Controllers\PostController@exeRegister')->name('register');