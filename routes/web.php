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

/*
Route::get('/hello', function () {
    //return view('welcome');
    return 'Hello World';
});

Route::get('/mainPage', function(){
    return view('templates.mainPage');

});

Route::get('/index', function(){
    return view('pages.index');

});

Route::get('/header', function(){
    return view('templates.header');

});
*/
Route::get('/', 'PagesController@index');
Route::get('/login', 'PagesController@login');
Route::get('/register', 'PagesController@register');
Route::get('/newsfeed', 'PagesController@newsfeed');
Route::get('/readonly', 'PagesController@readonly');
Route::get('/article', 'PagesController@article');
Route::get('/content', 'PagesController@content');
//Route::get('/mainPage', 'PagesController@mainPage');