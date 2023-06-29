<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::group(['namespace' => 'LivingSpace'], function (){
    Route::get('/livingSpace/create', 'CreateController')->name('create');
    Route::post('/livingSpace', 'StoreController')->name('store');
});

Route::group(['namespace' => 'Flat'], function (){
    Route::get('/flat', 'IndexController')->name('flat.index');
    });

Route::group(['namespace' => 'Room'], function (){
    Route::get('/room', 'IndexController')->name('room.index');
    });

Route::group(['namespace' => 'House'], function (){
    Route::get('/house', 'IndexController')->name('house.index');
    });

Route::group(['namespace' => 'Sale'], function (){
    Route::get('/sale/{livingSpace}', 'ShowController')->name('sale.show');
    Route::get('/sale/{livingSpace}/edit', 'EditController')->name('sale.edit');
    Route::patch('/sale/{livingSpace}', 'UpdateController')->name('sale.update');
    Route::delete('/sale/{livingSpace}', 'DestroyController')->name('sale.destroy');

});
