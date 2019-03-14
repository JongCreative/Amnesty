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

/**
 * Single Pages
 */
Route::get('/', 'PagesController@index')->name('home');
Route::get('/contestterms', 'PagesController@contestterms')->name('terms');
Route::get('/press', 'PagesController@press')->name('press');
Route::get('/sponsors', 'PagesController@sponsors')->name('sponsors');
Route::get('/jury', 'PagesController@jury')->name('jury');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/faq', 'PagesController@faq')->name('faq');


/**
 * Admin Routes
 */
Route::get('/admin', 'AdminsController@index');

Route::get('/admin/contest/edit', 'AdminsController@contestEdit');

/**
 * Auth Routes
 */
Auth::routes();

Route::get('/home', 'HomeController@index');

/*
 * Single Pages Controller
 */

Route::resource('/photos', 'PhotosController');
Route::resource('/user', 'UsersController');
