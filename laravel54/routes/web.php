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

// 路由的阿江

route::get('index/index','IndexController@index');
route::get('index/add','IndexController@add');
route::any('index/add_do','IndexController@add_do');
route::any('index/add_del','IndexController@add_del');
route::any('index/add_update','IndexController@add_update');
route::any('index/add_upd','IndexController@add_upd');
route::any('show/index','ShowController@index');
route::any('show/login','ShowController@login');
route::any('show/login_do','ShowController@login_do');
route::any('show/region','ShowController@region');
route::any('show/region_do','ShowController@region_do');
route::any('show/person','ShowController@person');

//梦雨路由
route::any('types/index','TypesController@index');
route::any('types/del','TypesController@del');
route::any('types/sets','TypesController@sets');
route::any('types/add_upd','TypesController@add_upd');
route::any('types/add','TypesController@add');

//直播分类
route::any('types/index','TypesController@index');


//个人中心 苏
route::any('person/index','PersonController@index');
route::any('person/subscribe','PersonController@subscribe');
route::any('person/profileauth','PersonController@profileauth');

//国威的路由
//订阅于历史
route::any('sub/index','SubscribeController@sub');
route::any('sub/list','SubscribeController@sublist');

