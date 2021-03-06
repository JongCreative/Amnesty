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
Route::get('/jury', 'PagesController@jury')->name('jury');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/faq', 'PagesController@faq')->name('faq');


/**
 * Admin Routes
 */
Route::get('/admin', 'AdminsController@index')->middleware('auth');
Route::patch('/admin/contest', 'AdminsController@contestUpdate');
Route::get('/admin/contest/edit', 'AdminsController@contestEdit');
Route::get('/admin/contest/create', 'AdminsController@contestCreate');
Route::post('/admin/contest', 'AdminsController@contestStore');

/**
 * Auth Routes
 */
Auth::routes();

/**
 * Dashboard
 */
Route::get('/dashboard', 'dashboardController@index');
Route::get('/dashboard/email', 'dashboardController@changeEmail');
Route::patch('/dashboard/email', 'dashboardController@updateEmail');
Route::get('/dashboard/description', 'dashboardController@changeDescr');
Route::patch('/dashboard/description', 'dashboardController@updateDescr');
Route::get('/dashboard/password', 'dashboardController@changePassword');
Route::patch('/dashboard/password', 'dashboardController@updatePassword');
Route::get('/dashboard/name', 'dashboardController@changeName');
Route::patch('/dashboard/name', 'dashboardController@updateName');
Route::get('/dashboard/avatar', 'dashboardController@avatar');
Route::patch('/dashboard/avatar', 'dashboardController@updateAvatar');
Route::patch('/dashboard/avatar', 'dashboardController@updateAvatar');
Route::delete('/users/{user}/avatar', 'UsersController@deleteAvatar');
Route::get('/users/{user}/avatar', 'dashboardController@avatar');
/*
 * Resource Pages Controller
 */

Route::resource('/photos', 'PhotosController');
Route::resource('/users', 'UsersController');
Route::resource('/sponsors', 'SponsorsController');
Route::resource('/press', 'PressController');