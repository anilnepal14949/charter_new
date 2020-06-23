<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['as'=>'home','uses'=>'HomeController@index']);
Route::get('/home',['as'=>'home.new','uses'=>'HomeController@goToHome']);
Route::get('/home/posts/{id}',['as'=>'home.posts','uses'=>'HomeController@showPosts']);
Route::get('/home/postsContent/{id}/{cid}',['as'=>'home.postsContent','uses'=>'HomeController@showPostsContent']);
Route::get('/home/print',['as'=>'home.print','uses'=>'HomeController@printt']);


/*********** Admin Routes *********************/
Route::get('/admin', ['as'=>'admin','uses'=>'AdminController@index']);
Route::post('/admin/index', ['as'=>'admin.login','uses'=>'AdminController@login']);
Route::get('/admin/logout', ['as'=>'admin.logout','uses'=>'AdminController@logout']);

// Important Infos routes
Route::resource('info','ImpInfoController');


// Category routes
Route::resource('category','CategoryController');

// Posts routes
Route::get('/posts/new/{cid}',['as'=>'posts.new','uses'=>'PostsController@index']);
Route::post('/posts',['as'=>'posts.store','uses'=>'PostsController@store']);
Route::get('/posts/{id}/edit',['as'=>'posts.edit','uses'=>'PostsController@edit']);
Route::put('/posts/update/{id}',['as'=>'posts.update','uses'=>'PostsController@update']);
Route::delete('/posts/{id}',['as'=>'posts.destroy','uses'=>'PostsController@destroy']);

Route::get('/posts/print',['as'=>'posts.print','uses'=>'HomeController@printAllTitles']);
Route::get('/posts/details/print',['as'=>'posts.details.print','uses'=>'HomeController@printAllPosts']);

// Slider routes
Route::resource('slider','SliderController');
