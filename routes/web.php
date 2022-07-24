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

Route::group(['prefix' => 'admin'], function(){
    Route::group(['prefix'=>'cate'], function(){
        Route::get('list', ['as'=>'admin.cate.getList', 'uses'=>'CateController@getList']);
        Route::get('add', ['as'=>'admin.cate.getAdd', 'uses'=>'CateController@getAdd']);
        Route::post('add', ['as'=>'admin.cate.postAdd', 'uses'=>'CateController@postAdd']);
        Route::get('edit/{id}', ['as'=>'admin.cate.getEdit', 'uses'=>'CateController@getEdit']);
        Route::post('edit/{id}', ['as'=>'admin.cate.postEdit', 'uses'=>'CateController@postEdit']);
        Route::get('delete/{id}', ['as'=>'admin.cate.getDelete', 'uses'=>'CateController@getDelete']);
    });

    Route::group(['prefix'=>'book'], function(){
        Route::get('list', ['as'=>'admin.book.getList', 'uses'=>'BookController@getList']);
        Route::get('add', ['as'=>'admin.book.getAdd', 'uses'=>'BookController@getAdd']);
        Route::post('add', ['as'=>'admin.book.postAdd', 'uses'=>'BookController@postAdd']);
        Route::get('edit/{id}', ['as'=>'admin.book.getEdit', 'uses'=>'BookController@getEdit']);
        Route::post('edit/{id}', ['as'=>'admin.book.postEdit', 'uses'=>'BookController@postEdit']);
        Route::get('delete/{id}', ['as'=>'admin.book.getDelete', 'uses'=>'BookController@getDelete']);
    });
});
