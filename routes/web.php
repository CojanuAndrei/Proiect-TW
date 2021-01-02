<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/newsfeed', function () {
    return view('newsfeed');
});

Route::get('/content', function () {
    return view('content');
});

Route::get('/article', function () {
    return view('article');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/create-post', function () {
    return view('create_post');
})->name('create-post');

Route::post('/createpost', [
    'uses'=>'PostController@postCreatePost',
    'as'=>'post.create',
    'middleware' => 'auth'
]);