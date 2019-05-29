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
Route::get('suatin','TestController@suatin')->name('suatin');


Route::group(['as' => 'frontend.','namespace' => 'Frontend'],function (){
    Route::group(['prefix' => 'login'],function(){
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin');
    });
    Route::get('home','HomeController@getHome');
    Route::get('contact','ContactController@getContact');
    Route::get('project','ProjectController@getProject');
    Route::get('aboutus','AboutusController@getAboutus');
});
Route::group(['as' => 'backend.','namespace' => 'Backend'],function (){
   Route::get('dashboard','DashboardController@getDashboard')->name('dashboard');
   Route::get('logout','DashboardController@getLogout')->name('logout');

    Route::resource('account', 'AccountController');
    Route::resource('newws', 'NewsController');
    Route::resource('research', 'ResearchsController');
   Route::get('logout','DashboardController@getLogout')->name('logout');


});






