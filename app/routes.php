<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array( 'before' => 'auth','uses'=> 'MainController@showhomepage'));

Route::get('/add_question', array( 'before' => 'auth','uses'=> 'MainController@showaddquestion'));

Route::get('/view_all_questions', array( 'before' => 'auth','uses'=> 'MainController@showallquestions'));

Route::get('/view_all_my_forums', array( 'before' => 'auth','uses'=> 'MainController@showallmyforums'));

Route::get('/signup', array( 'before' => 'guest', 'uses' => 'AuthenticationController@showsignup'));

Route::post('/signup', array('before' => 'csrf', 'uses' => 'AuthenticationController@proccesssignup'));

Route::get('/login', array( 'before' => 'guest', 'uses' => 'AuthenticationController@showlogin'));

Route::post('/login', array('before' => 'csrf', 'uses' => 'AuthenticationController@proccesslogin'));

Route::get('/logout', 'AuthenticationController@logout');
