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

Route::get('/', 'Home@index')->name('home');

Route::get('/about', 'About@index')->name('about');

Route::get('/contact', 'Contact@index')->name('contact');

Route::get('/post','Post@index')->name('post');