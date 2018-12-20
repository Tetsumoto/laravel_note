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

Route::get('/', 'MemosController@index');

Route::get('/folders', 'MemosController@folders');

Route::get('/memos/{folderId}', 'MemosController@memos');

Route::get('/detail/{id}', 'MemosController@detail');

Route::get('/searchTag', 'MemosController@searchTag');

Route::get('/delete/{id}', 'MemosController@delete');

Route::get('/newMemoDetail', 'MemosController@newMemoDetail');

Route::get('/editMemo', 'MemosController@editMemo');