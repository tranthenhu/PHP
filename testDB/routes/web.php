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



route::get('/index','customer@index')->name('index');
route::get('/create','customer@create')->name('create');
route::post('/store','customer@store')->name('store');
route::get('/edit','customer@edit')->name('edit');