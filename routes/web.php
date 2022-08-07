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

//Admin - Rewrite friendly url
Route::get('/admin', 'Admin\LoginController@getLogin');

//Frontend - Rewrite friendly url
Route::get('/', ['as' => 'frontend.index.getIndex', 'uses' => 'Frontend\IndexController@getIndex']);

Route::get('/b-{id}-{slug}', 'Frontend\BookController@getItem');
Route::get('/list-book', 'Frontend\BookController@getList');
Route::get('/c-{id}-{slug}', 'Frontend\BookController@getList');
Route::get('/qv{id}-{slug}', 'Frontend\BookController@quickView');

//login-logout-register
Route::get('/login', ['as' => 'frontend.login.getLogin', 'uses' => 'Frontend\LoginController@getLogin']);
Route::post('/login', ['as' => 'frontend.login.postLogin', 'uses' => 'Frontend\LoginController@postLogin']);
Route::get('/logout', ['as' => 'frontend.login.getLogout', 'uses' => 'Frontend\LoginController@getLogout']);
Route::get('/register', ['as' => 'frontend.login.getRegister', 'uses' => 'Frontend\LoginController@getRegister']);

//user
Route::get('/profile', ['as' => 'frontend.user.getProfile', 'uses' => 'Frontend\UserController@getProfile'])->middleware('frontendLogin');
Route::get('/change-password', ['as' => 'frontend.user.getChangePassword', 'uses' => 'Frontend\UserController@getChangePassword'])->middleware('frontendLogin');
Route::get('/order-history', ['as' => 'frontend.user.getOrderHistory', 'uses' => 'Frontend\UserController@getOrderHistory'])->middleware('frontendLogin');
Route::get('/add-to-cart-b{id}-q{quantities}', ['as' => 'frontend.user.addToCart', 'uses' => 'Frontend\UserController@addToCart']);
Route::get('/cart', ['as' => 'frontend.user.getCart', 'uses' => 'Frontend\UserController@getCart'])->middleware('frontendLogin');
Route::post('/cart', ['as' => 'frontend.user.orderBooks', 'uses' => 'Frontend\UserController@orderBooks'])->middleware('frontendLogin');
Route::get('/orderStatus', ['as' => 'frontend.user.orderStatus', 'uses' => 'Frontend\UserController@orderStatus']);
Route::get('/del-item-cart-b{id}', ['as' => 'frontend.user.delItemCart', 'uses' => 'Frontend\UserController@delItemCart'])->middleware('frontendLogin');

Route::get('/error', ['as' => 'frontend.error.getError', 'uses' => 'Frontend\ErrorController@getError']);

//admin
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'dashboard', 'middleware' => 'adminLogin'], function () {
        //list
        Route::get('list', ['as' => 'admin.dashboard.getList', 'uses' => 'Admin\DashboardController@getList']);
    });

    Route::group(['prefix' => 'group', 'middleware' => 'adminLogin'], function () {
        //list
        Route::get('list', ['as' => 'admin.group.getList', 'uses' => 'Admin\GroupController@getList']);
    });

    Route::group(['prefix' => 'cate', 'middleware' => 'adminLogin'], function () {
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

    Route::group(['prefix' => 'book', 'middleware' => 'adminLogin'], function () {
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

    Route::group(['prefix' => 'user', 'middleware' => 'adminLogin'], function () {
        //list
        Route::get('list', ['as' => 'admin.user.getList', 'uses' => 'Admin\UserController@getList']);
        Route::get('changeGroupId/{id}/{group_id}', ['as' => 'admin.user.changeGroupId', 'uses' => 'Admin\UserController@changeGroupId']);
        Route::get('changeStatus/{id}/{status}', ['as' => 'admin.user.changeStatus', 'uses' => 'Admin\UserController@changeStatus']);

        //add
        Route::get('add', ['as' => 'admin.user.getAdd', 'uses' => 'Admin\UserController@getAdd']);
        Route::post('add', ['as' => 'admin.user.postAdd', 'uses' => 'Admin\UserController@postAdd']);

        //account
        Route::get('profile', ['as' => 'admin.user.getProfile', 'uses' => 'Admin\UserController@getProfile']);
        Route::get('changeAccPw', ['as' => 'admin.user.changeAccPw', 'uses' => 'Admin\UserController@changeAccPw']);

        //delete
        Route::get('delete/{id}', ['as' => 'admin.user.getDelete', 'uses' => 'Admin\UserController@getDelete']);
    });

    Route::group(['prefix' => 'slider', 'middleware' => 'adminLogin'], function () {
        //list
        Route::get('list', ['as' => 'admin.slider.getList', 'uses' => 'Admin\SliderController@getList']);

        Route::get('changeStatus/{id}/{status}', ['as' => 'admin.slider.changeStatus', 'uses' => 'Admin\SliderController@changeStatus']);
        Route::get('changeOrdering/{id}/{ordering}', ['as' => 'admin.slider.changeOrdering', 'uses' => 'Admin\SliderController@changeOrdering']);

        // //add
        // Route::get('add', ['as' => 'admin.cate.getAdd', 'uses' => 'Admin\CateController@getAdd']);
        // Route::post('add', ['as' => 'admin.cate.postAdd', 'uses' => 'Admin\CateController@postAdd']);

        //edit
        Route::get('edit/{id}', ['as' => 'admin.slider.getEdit', 'uses' => 'Admin\SliderController@getEdit']);
        Route::post('edit/{id}', ['as' => 'admin.slider.postEdit', 'uses' => 'Admin\SliderController@postEdit']);

        //delete
        Route::get('delete/{id}', ['as' => 'admin.slider.getDelete', 'uses' => 'Admin\SliderController@getDelete']);
    });

    Route::group(['prefix' => 'cart', 'middleware' => 'adminLogin'], function () {
        //list
        Route::get('list', ['as' => 'admin.cart.getList', 'uses' => 'Admin\CartController@getList']);
        Route::get('detail/{id}', ['as' => 'admin.cart.getDetail', 'uses' => 'Admin\CartController@getDetail']);
        Route::get('changeStatus/{id}/{status}', ['as' => 'admin.cart.changeStatus', 'uses' => 'Admin\CartController@changeStatus']);
    });

    Route::get('login', ['as' => 'admin.login.getLogin', 'uses' => 'Admin\LoginController@getLogin']);
    Route::post('login', ['as' => 'admin.login.postLogin', 'uses' => 'Admin\LoginController@postLogin']);
    Route::get('logout', ['as' => 'admin.login.getLogout', 'uses' => 'Admin\LoginController@getLogout']);
});


//frontend
Route::group(['prefix' => 'frontend'], function () {
    /*     Route::group(['prefix' => 'index'], function () {
        //list
        Route::get('index', ['as' => 'frontend.index.getIndex', 'uses' => 'Frontend\IndexController@getIndex']);

    }); */

    Route::group(['prefix' => 'book'], function () {
        //list
        Route::get('item/{id}', ['as' => 'frontend.book.getItem', 'uses' => 'Frontend\BookController@getItem']);
    });
});
