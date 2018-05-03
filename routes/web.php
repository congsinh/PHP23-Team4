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

Route::group(['namespace' => 'Admin'],function(){
    Route::get('admin/login','AdminController@getLogin')->name('admin-login');
    Route::post('admin/login','AdminController@postLogin')->name('admin-post-login');
    Route::group(['prefix'=>'admin','middleware'=>'check_admin'],function(){
        Route::get('dashboard','AdminController@index')->name('dashboard');
        Route::get('logout','AdminController@logout')->name('admin-logout');
    });
});


Route::group(['namespace' => 'Web'],function(){
    Route::group(['prefix'=>'/'],function(){
        Route::get('', 'HomeController@index');
    });
    Route::get('/{category}','ProductController@getProducts');
    Route::get('product/{id}', 'ProductController@show');
    Route::get('product', 'ProductController@index');

});

