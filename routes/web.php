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

    $main_post = \App\Post::orderBy('id','desc')
        ->take(1)
        ->first();

    $second_post = \App\Post::orderBy('id','desc')
        ->skip(1)
        ->take(1)
        ->first();

    $third_post = \App\Post::orderBy('id','desc')
        ->skip(2)
        ->take(1)
        ->first();

    $last_four = \App\Post::orderBy('id','desc')
        ->skip(3)
        ->take(4)
        ->get();

    return view('index')
        ->with('main_post', $main_post)
        ->with('second_post', $second_post)
        ->with('third_post', $third_post)
        ->with('last_four', $last_four);
});

Route::get('/about', function () {
    return view('about');
});

Route::resource('posts', 'PostController');
Route::resource('menu', 'MenuController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
