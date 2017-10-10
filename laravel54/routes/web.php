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
$uri=$_SERVER['REQUEST_URI'];
$uri=explode('/', $uri);
if(isset($uri[2]))
{
  Route::any('/'.$uri[1].'/'.$uri[2], ucfirst($uri[1]).'Controller@'.$uri[2]);
}else
{
  Route::any('/'.$uri[1], ucfirst($uri[1]).'Controller@index');
}

Route::get('/', function () {
    return view('welcome');
});

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


//直播分类
route::any('types/index','TypesController@index');


//个人中心
route::any('person/index','PersonController@index');
route::any('person/subscribe','PersonController@subscribe');
route::any('person/profileauth','PersonController@profileauth');
//配置路由规则
// $ROUTES=isset($_GET['r'])?$_GET['r']:false;
// if($ROUTES)
// {
//     $ROUTES=explode('/',$ROUTES);
//     Route::match(['get','post'],'/',ucfirst($ROUTES[0]).'Controller@'.$ROUTES[1]);
// }
// else
// {
//     $uri=$_SERVER['REQUEST_URI'];
//     $uri=explode('/', $uri);
//     if(isset($uri[2])){
//         Route::any('/'.$uri[1].'/'.$uri[2], ucfirst($uri[1]).'Controller@'.$uri[2]);
//     }else{
//         //Route::any('/'.$uri[2], ucfirst($uri[2]).'Controller@index');
//         Route::any('/', 'LoginController@homepage');
//     }
// }