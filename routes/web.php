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

Route::group(['middleware' => ['web']],function(){

    //Home Page
    Route::get('/',array(
        'as'=> 'ShowHomeView',
        'uses'=>'HomeController@index'
    ));
    Route::get('home',array(
        'as'=> 'ShowHomeView',
        'uses'=>'HomeController@index'
    ));

    //Contact Page
    Route::resource('contact','ContactController',[
        'except'=>'show'
        ]
    );

    //Project Page
    Route::get('project',array(
        'as'=>'ShowProjectView',
        'uses'=>'ProjectController@index'
    ));

    //Admin Dashboard
    Route::post('dashboard/login',array(
        'as'=>'postLogIn',
        'uses'=>'DashboardController@postLogIn'
    ));
    Route::get('dashboard',array(
        'as'=>'ViewDashboard',
        'uses'=>'DashboardController@index'
    ));
    Route::get('dashboard/logout',array(
        'as'=>'logOutDashboard',
        'uses'=>'DashboardController@logout'
    ));
    Route::get('dashboard/index',array(
        'as'=>'ViewDashboardIndex',
        'uses'=>'DashboardController@dashboardIndex',
        'middleware'=>'admin'
    ));
    Route::post('dashboard/index/add',array(
        'as'=>'InsertNewProject',
        'uses' => 'DashboardController@addNewProject',
        'middleware' => 'admin'
    ));
});