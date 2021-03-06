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

Route::get('/', 'PageContorller@homefun')->name("home");

Route::get('/about', 'PageContorller@aboutfun')->name("about");

Route::get('/contact', 'PageContorller@contactfun')->name("contact");

Route::get('/post', 'PageContorller@postfun')->name("post");
