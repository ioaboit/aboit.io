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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'AboitController@index');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
Route::get('story', 'BlogsController@show');
Route::get('blog/new', 'BlogsController@newBlog');
Route::post('blog/create', 'BlogsController@createBlog')->name('blog.create');

//story


Route::prefix('api')->group(function () {
    Route::get('get/blogs', 'BlogsController@blogList');
    Route::get('get/storys', 'PostsController@apiPosts');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::any('post/upload', 'PostsController@upload');
Route::resource('posts', 'PostsController');

Route::group(['middleware' => ['auth']], function () {
    //
	Route::get('story/new', 'PostsController@create');
	Route::post('story/new', 'PostsController@store');
	Route::get('me/stories', 'MeController@getMyStories');
	Route::get('me/{id}/edit', 'MeController@editMyStory');
	Route::post('me/{id}/update', 'MeController@updateMyStory');
});
Route::get('story/id/{id}', 'PostsController@show');
Route::get('story/{id}', 'PostsController@showWithUrlId');
