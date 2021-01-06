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

Route::get('/', 'Welcomecontroller@index')->name('welcome');

Route::resource('/admindashboard','Admincontroller');
Route::get('/welcome','Welcomecontroller@index')->name('welcome');
Route::get('/admin/dashboard','HomeController@index')->name('dashboard');

Route::resource('/category','Categorycontroller');

Route::resource('/addproduct','Productcontroller');

Route::resource('/addflower','Flowercontroller');

Route::resource('/blog','Blogcontroller');

Route::resource('/blogview','Blogviewcontroller');

Route::resource('/flower','Flowerviewcontroller');

Route::resource('/product','Productviewcontroller');

Route::resource('/help','Helpcontroller');

Route::post('/Login/custom','Logincustomcontroller@login')->name('Login.custom');

Route::get('/Logincustom','Logincustomcontroller@index')->name('Logincustom');

Auth::routes();

Route::resource('/registerr','Registercontroller');

