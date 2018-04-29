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
        Route::resource('/products','ProductController');
    });

    Route::post('configuration','AjaxController@getConfiguration')->name('configuration');
});



Route::group(['namespace' => 'Web'],function(){
    Route::get('/','HomeController@index')->name('home');
});


Route::get('test', function ()
{
    return view('pages.home');
});
Route::get('shop', function ()
{
    return view('page.shop');
});


//Ajax
