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
// Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();


//ログアウト中のページ
Route::get('/login', 'Auth\LoginController@login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/register', 'Auth\RegisterController@register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/added', 'Auth\RegisterController@added');
Route::post('/added', 'Auth\RegisterController@added');


//ログイン中のページ
Route::group(['middleware' => ['loginUserCheck']], function() {

Route::get('/top','PostsController@index');

Route::post('/top','PostsController@create')->name('posts');

Route::get('/top/{id}/post','PostsController@delete');

Route::get('/profile','UsersController@profile');

Route::get('/search','UsersController@search');
Route::post('/search', 'UsersController@search')->name('users.search');

Route::post('/profile/update', 'UsersController@updateProfile');


//フォローリスト
Route::get('/follow-list','PostsController@followList');
Route::get('/follower-list','PostsController@followerList');

Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/logout', 'Auth\LoginController@logout');

});
