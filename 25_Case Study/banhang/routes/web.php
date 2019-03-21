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
  Route::get('/','sanphamicontroller@index')->name('sanpham.index')->middleware('auth');
  Route::get('/create','sanphamicontroller@create')->name('sanpham.create')->middleware(['auth','checkrole']);
  Route::post('/store','sanphamicontroller@store')->name('sanpham.store')->middleware(['auth','checkrole']);
  Route::get('/show/{id}','sanphamicontroller@show')->name('sanpham.show')->middleware('auth');
  Route::get('/edit/{id}','sanphamicontroller@edit')->name('sanpham.edit')->middleware(['auth','checkrole']);
  Route::post('/update/{id}','sanphamicontroller@update')->name('sanpham.update')->middleware(['auth','checkrole']);
  Route::get('/delete/{id}','sanphamicontroller@delete')->name('sanpham.delete')->middleware(['auth','checkrole']);
  Route::post('/find','sanphamicontroller@find')->name('sanpham.find')->middleware('auth');
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
  Route::get('/index','bannerImagecontroller@index')->name('banner.index')->middleware('auth');
  Route::get('/create','bannerImagecontroller@create')->name('banner.create')->middleware('auth');
  Route::post('/store','bannerImagecontroller@store')->name('banner.store')->middleware('auth');
  Route::get('/delete/{id}','bannerImagecontroller@delete')->name('banner.delete')->middleware('auth');
});