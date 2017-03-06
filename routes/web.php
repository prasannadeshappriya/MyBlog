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

//Home Page
Route::get('/',array(
    'as'=> 'ShowHomeView',
    'uses'=>'HomeController@index'
));

Route::get('home',array(
    'as'=> 'ShowHomeView',
    'uses'=>'HomeController@index'
));

Route::resource('contact','ContactController',[
    'except'=>'show'
    ]
);

Route::get('project',array(
    'as'=>'ShowProjectView',
    'uses'=>'ProjectController@index'
));