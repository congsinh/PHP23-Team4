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
    Route::get('/delete-product-cart/{id_order}/{id_product}','Auth\DetailUserController@deleteProductCart')->name('delete-product-cart');
});


Route::group(['namespace' => 'Admin'],function(){
    Route::get('admin/login','AdminController@getLogin')->name('admin-login');
    Route::post('admin/login','AdminController@postLogin')->name('admin-post-login');
    Route::group(['prefix'=>'admin','middleware'=>'check_admin'],function(){
        Route::get('logout','AdminController@logout')->name('admin-logout');
        Route::get('dashboard','DashboardController@index')->name('dashboard');

        Route::resource('products','ProductController');
        Route::resource('category', 'CategoryController');
        Route::resource('manufacturer', 'ManufacturerController');
        Route::resource('orders', 'OrderController');

        Route::post('orders/export', 'OrderController@exportExc')->name('export-excel');
        Route::get('orders/print/{id}', 'OrderController@printOrder')->name('order-print');
        Route::get('users', 'UserController@index')->name('users-index');
        Route::get('users/{id}/show', 'UserController@show')->name('users-show');
        Route::post('users/reset-pw', 'UserController@resetPassWord')->name('users-password');
    });
    Route::get('configuration','AjaxController@getConfiguration')->name('configuration');
    Route::get('filter-products','AjaxController@getfilterProducts')->name('filter-product');
    Route::get('buy-product','CartController@getBuyProduct');
    Route::get('my-cart','CartController@myCart');
    Route::get('cart-tang','CartController@cartTang');
    Route::get('cart-giam','CartController@cartGiam');
    Route::get('remove-cart','CartController@removeCart');
    Route::post('check-out','CartController@cartCheckOut');
});
Route::group(['namespace' => 'Web'],function() {
    Route::get('/', 'HomeController@index');
    Route::get('search', 'HomeController@search')->name('search');
    Route::get('{category}', 'ProductController@index')->name('category-products');
    Route::get('subcate/{slug}', 'ProductController@getProductsBySub')->name('subcate-products');
    Route::get('product/{id}', 'ProductController@show')->name('product-detail');

});