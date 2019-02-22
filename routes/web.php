<?php


//登陆
Route::get('/','LoginController@login')->name('login');
Route::post('/login','LoginController@store')->name('login.store');
//注册
Route::get('/sign','LoginController@sign')->name('sign');
Route::post('/sign','LoginController@signin')->name('sign.store');


Route::post('/users/store','LoginController@store')->name('users.store');

//
























//路由返回数据
//Route::get('/',function(){
//    return 'asdf';
//});


////练习
//Route::get('/',function (){
//    return 'sd';
//});
//Route::get('/aa','StudentController@help');
//Route::get('/students','StudentController@stuList');
//Route::get('/student/add','StudentController@add');
//Route::post('/student/save','StudentController@save');
//
//Route::get('/Stroller','StrollerController@index');
//Route::get('/student','StudentController@index');
//
////资源路由
//Route::resource('articles','ArticleController');
//Route::get('/aaa','ArticleController@create');
//
//
////
//Route::get('/db','DbController@index');
//
//










