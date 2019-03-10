<?php


//登陆
Route::get('/login','LoginController@login')->name('login');
Route::post('/login','LoginController@store')->name('login');
//注册
Route::get('/sign','LoginController@sign')->name('sign');
Route::post('/sign','LoginController@signin')->name('sign.store');
Route::get('logout','LoginController@destroy')->name('logout');

Route::get('/users','UserController@index')->name('users.index');
//修改密码
Route::get('/users/edit','UserController@edit')->name('users.edit');
Route::post('/users/{user}','UserController@update')->name('users.update');



Route::get('/shops','ShopController@index')->name('shops.index');
Route::get('/shops/store','ShopController@store')->name('shops.store');

//菜品分类
Route::resource('/menucategories','MenucategorieController');
//菜品
Route::resource('/menus','MenuController');
//Route::patch('/menus/{menu}', 'MenuController@update')->name('menus.update');
//文件上传
Route::post('/upload','MenuController@upload')->name('upload');
//活动
Route::resource('/activitys','ActivityController');

//订单
Route::get('/orders','OrderController@index')->name('orders.index');
//发货
Route::get('/orders/{order}/deliver','OrderController@deliver')->name('orders.deliver');
//取消订单
Route::get('/orders/{order}/cancel','OrderController@cancel')->name('orders.cancel');
//订单详情
Route::get('/orders/{order}','OrderController@show')->name('orders.show');
//删除订单
Route::get('/orders/{order}','OrderController@destroy')->name('orders.destroy');
//订单
Route::get('/orderstatistics','OrderController@statistics')->name('orders.statistics');
Route::get('/orderstatisticsd','OrderController@statisticsd')->name('orders.statisticsd');
Route::get('/orderstatisticsm','OrderController@statisticsm')->name('orders.statisticsm');
//菜品销量
Route::get('/menustatisticsd','OrderController@menustatisticsd')->name('orders.menustatisticsd');
Route::get('/menustatisticsm','OrderController@menustatisticsm')->name('orders.menustatisticsm');


//活动列表
Route::get('/events','EventController@index')->name('events.index');
//活动报名
Route::get('/events/part','EventController@part')->name('events.part');

Route::get('/events/prize','EventController@prize')->name('events.prize');


















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










