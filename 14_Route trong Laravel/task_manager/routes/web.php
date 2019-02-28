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



Route::prefix('customer')->group(function() {
    Route::get('/','CustomerController@index'); 
    
    Route::get('/update/{key?}','CustomerController@edit')->name('customer.edit');
    Route::get('/update/{key}','CustomerController@update')->name('customer.update');

  
  });


  ?>