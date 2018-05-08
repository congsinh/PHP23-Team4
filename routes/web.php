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
Route::get('/login','Auth\LoginController@getLogin')->name('get-login-user');
Route::post('/login','Auth\LoginController@userLogin')->name('login-user');


Route::group(['middleware'=>'check_user'],function(){
    Route::get('/logout','Auth\LoginController@userLogout')->name('logout');
    Route::resource('/info','Auth\DetailUserController');
    Route::get('/edit-password','Auth\DetailUserController@editPassword');
    Route::put('/edit-password/{id}','Auth\DetailUserController@putPassword');
});


Route::group(['namespace' => 'Admin'],function(){
    Route::get('admin/login','AdminController@getLogin')->name('admin-login');
    Route::post('admin/login','AdminController@postLogin')->name('admin-post-login');
    Route::group(['prefix'=>'admin','middleware'=>'check_admin'],function(){
        Route::get('dashboard','AdminController@index')->name('dashboard');
        Route::get('logout','AdminController@logout')->name('admin-logout');
        Route::resource('products','ProductController');
        Route::resource('category', 'CategoryController');
        Route::resource('manufacturer', 'ManufacturerController');
        Route::resource('orders', 'OrderController');
    });
    Route::get('configuration','AjaxController@getConfiguration')->name('configuration');
    Route::get('filter-products','AjaxController@getfilterProducts')->name('filter-product');
});
Route::group(['namespace' => 'Web'],function() {
    Route::get('/', 'HomeController@index');
    Route::get('/{category}', 'ProductController@index');
    Route::get('product/{id}', 'ProductController@show');

});