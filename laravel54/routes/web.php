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
// 路由的配置
route::get('index/index','IndexController@index');
route::get('index/add','IndexController@add');
route::any('index/add_do','IndexController@add_do');
route::any('index/add_del','IndexController@add_del');
route::any('index/add_update','IndexController@add_update');
route::any('index/add_upd','IndexController@add_upd');


route::any('show/index','ShowController@index');
route::any('show/login','ShowController@login');


route::any('types/index','TypesController@index');
route::any('types/del','TypesController@del');
route::any('types/sets','TypesController@sets');
route::any('types/add_upd','TypesController@add_upd');
route::any('types/add','TypesController@add');