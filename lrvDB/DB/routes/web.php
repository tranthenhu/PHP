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
 route::get('/them','customer@them')->name('them');
 route::post('/indexx','customer@add')->name('add');