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
    return view('welcome');
});

//Route::get('admin','AdminController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::match(['get','post'],'admin','AdminController@login');


Route::group(['middleware' => ['auth']], function () {
    
    Route::get('admindashboard','AdminController@dashboard');
    Route::get('admin/settings','AdminController@settings');


    Route::get('/product',function(){

        return view('admin.products.products');
    
    });
    
    Route::get('/order',function(){
    
        return view('admin.orders.orders');
    
    });
    
    Route::get('/category',function(){
    
        return view('admin.category.category');
    
    });
});








Route::get('/view', function () {

    return view('user.view.view');
    
});

Route::get('/logout','AdminController@logout');