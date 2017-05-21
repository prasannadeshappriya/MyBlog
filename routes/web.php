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
    Route::get('dashboard/index/view/{index}',array(
        'as'=>'ViewMoodleUserInfo',
        'uses'=>'DashboardController@viewUser',
        'middleware'=>'admin'
    ));
    Route::post('dashboard/index/add',array(
        'as'=>'InsertNewProject',
        'uses' => 'DashboardController@addNewProject',
        'middleware' => 'admin'
    ));
    Route::get('dashboard/token',array(
        'as'=>'phpLaravelSessionToken',
        'uses'=>'DashboardController@getToken'
    ));
    Route::post('dashboard/sync',array(
        'as'=>'syncMobileData',
        'uses'=>'DashboardController@startSync'
    ));
    Route::post('dashboard/syncdetails',array(
        'as'=>'syncMobileData',
        'uses'=>'DashboardController@syncDetails'
    ));
    Route::post('dashboard/synccourse',array(
        'as'=>'syncMobileData',
        'uses'=>'DashboardController@syncCourse'
    ));

    //Article Page
    Route::get('article',array(
        'as'=>'ViewArticlePage',
        'uses'=>'ArticleController@index'
    ));
    Route::get('article/{index}',array(
        'as'=>'ViewTutorial1',
        'uses'=>'ArticleController@viewTutorial'
    ));

    //Project Page
    Route::get('project',array(
        'as'=>'ShowProjectView',
        'uses'=>'ProjectController@index'
    ));
    Route::get('project/{name}',array(
        'as'=>'ShowProjectInfo',
        'uses'=>'ProjectController@viewProject'
    ));
    Route::get('project/download/{name}',array(
        'as'=>'DownloadProjectExeFiles',
        'uses'=>'ProjectController@downloadFiles'
    ));
});