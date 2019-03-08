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



  route::get('/','blogcontroller@index')->name('index');
  route::get('/create','blogcontroller@create')->name('create');
  route::post('/store','blogcontroller@store')->name('store');
  route::get('/{id}/edit','blogcontroller@edit')->name('edit');
  route::get('/{id}/show','blogcontroller@show')->name('show');
  route::post('/{id}/update','blogcontroller@update')->name('update');
  route::get('/{id}/destroy','blogcontroller@destroy')->name('destroy');


route::group(['prefix'=>'category'],function(){
    route::get('/','categorycontroller@index')->name('category.index');
    route::get('/create','categorycontroller@create')->name('category.create');
    route::post('/store','categorycontroller@store')->name('category.store');
    route::get('/{id}/show','categorycontroller@show')->name('category.show');
    route::get('/{id}/edit','categorycontroller@edit')->name('category.edit');
    route::post('/{id}/update','categorycontroller@update')->name('category.update');
    route::get('/{id}/destroy','categorycontroller@destroy')->name('category.destroy');
})
?>