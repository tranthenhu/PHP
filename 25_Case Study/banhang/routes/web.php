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
Route::get('/','sanphamicontroller@main')->name('sanpham.main');

Route::group(['prefix'=>'sanpham'],function (){
  Route::get('/','sanphamicontroller@index')->name('sanpham.index');
  Route::get('/create','sanphamicontroller@create')->name('sanpham.create');
  Route::post('/store','sanphamicontroller@store')->name('sanpham.store');
  Route::get('/show/{id}','sanphamicontroller@show')->name('sanpham.show');
  Route::get('/edit/{id}','sanphamicontroller@edit')->name('sanpham.edit');
  Route::post('/update/{id}','sanphamicontroller@update')->name('sanpham.update');
  Route::get('/delete/{id}','sanphamicontroller@delete')->name('sanpham.delete');
  Route::post('/find','sanphamicontroller@find')->name('sanpham.find');
});

Route::group(['prefix'=>'phanloai'],function (){
  Route::get('/','phanloaicontroller@index')->name('phanloai.index');
  Route::get('/create','phanloaicontroller@create')->name('phanloai.create');
  Route::post('/store','phanloaicontroller@store')->name('phanloai.store');
  Route::get('/edit/{id}','phanloaicontroller@edit')->name('phanloai.edit');
  Route::post('/update/{id}','phanloaicontroller@update')->name('phanloai.update');
  Route::get('/destroy/{id}','phanloaicontroller@destroy')->name('phanloai.destroy');

});


Route::group(['prefix'=>'giohang'],function (){
  Route::get('/index','giohangcontroller@index')->name('giohang.index');
  Route::post('/add/{id}','giohangcontroller@add')->name('giohang.add');
  Route::post('/bill','giohangcontroller@bill')->name('giohang.bill');
  Route::get('/destroy/{id}','giohangcontroller@destroy')->name('giohang.destroy');
    
});