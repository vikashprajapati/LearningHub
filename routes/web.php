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
Route::get('/','pagescontroller@home')->name('home');
Route::get('/forum','pagescontroller@forum');
Route::get('/resources','pagescontroller@resources');
Route::get('/store','pagescontroller@store');
Route::get('/viewpost','pagescontroller@vpost');
Route::get('/newthread','pagescontroller@nt');
Route::get('/video','pagescontroller@video');
Route::get('/qa','pagescontroller@qa');
Route::get('/profile','pagescontroller@profile');
