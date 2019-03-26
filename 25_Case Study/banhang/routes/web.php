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
Auth::routes();

Route::get('/','sanphamicontroller@main')->name('sanpham.main');

Route::group(['prefix'=>'sanpham'],function (){
  Route::get('/','sanphamicontroller@index')->name('sanpham.index');
  Route::get('/create','sanphamicontroller@create')->name('sanpham.create')->middleware(['auth','checkrole']);
  Route::post('/store','sanphamicontroller@store')->name('sanpham.store')->middleware(['auth','checkrole']);
  Route::get('/show/{id}','sanphamicontroller@show')->name('sanpham.show');
  Route::get('/edit/{id}','sanphamicontroller@edit')->name('sanpham.edit')->middleware(['auth','checkrole']);
  Route::post('/update/{id}','sanphamicontroller@update')->name('sanpham.update')->middleware(['auth','checkrole']);
  Route::get('/delete/{id}','sanphamicontroller@delete')->name('sanpham.delete')->middleware(['auth','checkrole']);
  Route::post('/find','sanphamicontroller@find')->name('sanpham.find')->middleware('auth');
  Route::post('/ratting/{id}','sanphamicontroller@ratting')->name('sanpham.ratting')->middleware('auth');
});

Route::group(['prefix'=>'phanloai'],function (){
  Route::get('/','phanloaicontroller@index')->name('phanloai.index')->middleware(['auth','checkrole']);
  Route::get('/create','phanloaicontroller@create')->name('phanloai.create')->middleware(['auth','checkrole']);
  Route::post('/store','phanloaicontroller@store')->name('phanloai.store')->middleware(['auth','checkrole']);
  Route::get('/edit/{id}','phanloaicontroller@edit')->name('phanloai.edit')->middleware(['auth','checkrole']);
  Route::post('/update/{id}','phanloaicontroller@update')->name('phanloai.update')->middleware(['auth','checkrole']);
  Route::get('/destroy/{id}','phanloaicontroller@destroy')->name('phanloai.destroy')->middleware(['auth','checkrole']);
});


Route::group(['prefix'=>'giohang'],function (){
  Route::get('/index','giohangcontroller@index')->name('giohang.index')->middleware('auth');
  Route::post('/add/{id}','giohangcontroller@add')->name('giohang.add')->middleware('auth');
  Route::post('/bill','giohangcontroller@bill')->name('giohang.bill')->middleware('auth');
  Route::get('/destroy/{giohang}','giohangcontroller@destroy')->name('giohang.destroy')->middleware('auth');
});

Route::group(['prefix'=>'banner'],function (){
  Route::get('/index','bannerImagecontroller@index')->name('banner.index')->middleware(['auth','checkrole']);
  Route::get('/create','bannerImagecontroller@create')->name('banner.create')->middleware(['auth','checkrole']);
  Route::post('/store','bannerImagecontroller@store')->name('banner.store')->middleware(['auth','checkrole']);
  Route::get('/delete/{id}','bannerImagecontroller@delete')->name('banner.delete')->middleware(['auth','checkrole']);
});

Route::group(['prefix'=>'comment'],function (){
  Route::post('/add/{id}','commentController@add')->name('comment.add')->middleware('auth');
  Route::get('/delete/{id}','commentController@delete')->name('comment.delete')->middleware('auth');
});

Route::group(['prefix'=>'role'],function (){
  Route::get('/index','RoleController@index')->name('role.index')->middleware(['auth','checkAdmin']);
  Route::get('/edit/{id}','RoleController@edit')->name('role.edit')->middleware(['auth','checkAdmin']);
  Route::post('/update/{id}','RoleController@update')->name('role.update')->middleware(['auth','checkAdmin']);
  Route::get('/delete/{id}','RoleController@delete')->name('role.delete')->middleware(['auth','checkAdmin']);
});

