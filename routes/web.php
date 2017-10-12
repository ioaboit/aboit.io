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
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
Route::get('blog', 'BlogsController@show');
Route::get('blog/new', 'BlogsController@newBlog');
Route::post('blog/create', 'BlogsController@createBlog')->name('blog.create');

Route::prefix('api')->group(function () {
    Route::get('get/blogs', 'BlogsController@blogList');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::any('post/upload', 'PostsController@upload');
Route::resource('posts', 'PostsController');
