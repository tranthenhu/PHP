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

Route::get('/','contactManagement@index')->name('index');
Route::get('/create','contactManagement@viewCreate')->name('create');
Route::post('/add','contactManagement@add')->name('add');
Route::get('/viewEdit/{id}','contactManagement@viewEdit')->name('viewEdit');
Route::post('/update/{id}','contactManagement@update')->name('update');
Route::post('/findName','contactManagement@findName')->name('findName');
Route::post('/findHo','contactManagement@findHo')->name('findHo');
Route::get('/delete/{id}','contactManagement@delete')->name('delete');