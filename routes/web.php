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
Route::get('test','TestController@test')->name('test');

Route::get('test1',function (){
    return 'abc';
});

Route::group(['as' => 'frontend.','namespace' => 'Frontend'],function (){
    Route::group(['prefix' => 'login'],function(){
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin');
    });
    Route::get('home','HomeController@getHome');
});
Route::group(['as' => 'backend.','namespace' => 'Backend'],function (){
   Route::get('dashboard','DashboardController@getDashboard')->name('dashboard');
   Route::get('logout','DashboardController@getLogout')->name('logout');

});






