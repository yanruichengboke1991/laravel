<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great! 
*/

Route::get('/', function () {
    return view('welcome');
});

//配置两个测试路由   
Route::get('/user','Usercontroller@index');


Route::get('/user/test2','Usercontroller@test2');

Route::get('/user/test','Usercontroller@test');

Route::get('/user/test3','Usercontroller@test3');



Route::get('/user/page3','Usercontroller@page3');
// Route::get('foo',function(){
// 	return 'hello world!';
// });

//配置分页代码
Route::get('/user/page2','Usercontroller@page2');