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

Route::get('/', function () {
//    phpinfo();
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('welcome')->middleware('auth');

Route::prefix('admin')->group(function (){
    Route::middleware(['auth', 'admin'])->group(function (){
        Route::get('/','Admin\AdminController@home');
        Route::get('/search','Admin\UserController@search');
        Route::get('/users','Admin\UserController@all_user');
        Route::get('/create','Admin\UserController@create');
        Route::put('create','Admin\UserController@save');
//        Route::get('delete/{id}','Admin\UserController@delete');
        Route::get('/delete/{id}','Admin\UserController@del');
        Route::get('/edit/{id}','Admin\UserController@edit');
        Route::patch('/edit/{id}','Admin\UserController@update');
    });

});