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


//admin
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'cate'], function () {
        //list
        Route::get('list', ['as' => 'admin.cate.getList', 'uses' => 'Admin\CateController@getList']);

        Route::get('changeStatus/{id}/{status}', ['as' => 'admin.cate.changeStatus', 'uses' => 'Admin\CateController@changeStatus']);
        Route::get('changeSpecial/{id}/{special}', ['as' => 'admin.cate.changeSpecial', 'uses' => 'Admin\CateController@changeSpecial']);
        Route::get('changeOrdering/{id}/{ordering}', ['as' => 'admin.cate.changeOrdering', 'uses' => 'Admin\CateController@changeOrdering']);

        //add
        Route::get('add', ['as' => 'admin.cate.getAdd', 'uses' => 'Admin\CateController@getAdd']);
        Route::post('add', ['as' => 'admin.cate.postAdd', 'uses' => 'Admin\CateController@postAdd']);

        //edit
        Route::get('edit/{id}', ['as' => 'admin.cate.getEdit', 'uses' => 'Admin\CateController@getEdit']);
        Route::post('edit/{id}', ['as' => 'admin.cate.postEdit', 'uses' => 'Admin\CateController@postEdit']);

        //delete
        Route::get('delete/{id}', ['as' => 'admin.cate.getDelete', 'uses' => 'Admin\CateController@getDelete']);
    });

    Route::group(['prefix' => 'book'], function () {
        //list
        Route::get('list', ['as' => 'admin.book.getList', 'uses' => 'Admin\BookController@getList']);
        Route::get('changeStatus/{id}/{status}', ['as' => 'admin.book.changeStatus', 'uses' => 'Admin\BookController@changeStatus']);
        Route::get('changeSpecial/{id}/{special}', ['as' => 'admin.book.changeSpecial', 'uses' => 'Admin\BookController@changeSpecial']);
        Route::get('changeOrdering/{id}/{ordering}', ['as' => 'admin.book.changeOrdering', 'uses' => 'Admin\BookController@changeOrdering']);
        Route::get('changeCateId/{id}/{cate_id}', ['as' => 'admin.book.changeCateId', 'uses' => 'Admin\BookController@changeCateId']);

        //add
        Route::get('add', ['as' => 'admin.book.getAdd', 'uses' => 'Admin\BookController@getAdd']);
        Route::post('add', ['as' => 'admin.book.postAdd', 'uses' => 'Admin\BookController@postAdd']);

        //edit
        Route::get('edit/{id}', ['as' => 'admin.book.getEdit', 'uses' => 'Admin\BookController@getEdit']);
        Route::post('edit/{id}', ['as' => 'admin.book.postEdit', 'uses' => 'Admin\BookController@postEdit']);

        //delete
        Route::get('delete/{id}', ['as' => 'admin.book.getDelete', 'uses' => 'Admin\BookController@getDelete']);
    });

    Route::group(['prefix' => 'group'], function () {
        //list
        Route::get('list', ['as' => 'admin.group.getList', 'uses' => 'Admin\GroupController@getList']);
    });

    Route::group(['prefix' => 'user'], function () {
        //list
        Route::get('list', ['as' => 'admin.user.getList', 'uses' => 'Admin\UserController@getList']);
        Route::get('changeGroupId/{id}/{group_id}', ['as' => 'admin.user.changeGroupId', 'uses' => 'Admin\UserController@changeGroupId']);
        Route::get('changeStatus/{id}/{status}', ['as' => 'admin.user.changeStatus', 'uses' => 'Admin\UserController@changeStatus']);

        //add
        Route::get('add', ['as' => 'admin.user.getAdd', 'uses' => 'Admin\UserController@getAdd']);
        Route::post('add', ['as' => 'admin.user.postAdd', 'uses' => 'Admin\UserController@postAdd']);

        //delete
        Route::get('delete/{id}', ['as' => 'admin.user.getDelete', 'uses' => 'Admin\UserController@getDelete']);
    });

    Route::get('login', ['as' => 'admin.login.getLogin', 'uses' => 'Admin\LoginController@getLogin']);
    Route::post('login', ['as' => 'admin.login.postLogin', 'uses' => 'Admin\LoginController@postLogin']);
});


//frontend
Route::group(['prefix' => 'frontend'], function () {
    Route::group(['prefix' => 'index'], function () {
        //list
        Route::get('index', ['as' => 'frontend.index.getIndex', 'uses' => 'Frontend\IndexController@getIndex']);

    });

    Route::group(['prefix' => 'book'], function () {
        //list
        Route::get('item/{id}', ['as' => 'frontend.book.getItem', 'uses' => 'Frontend\ItemController@getItem']);

    });
});
