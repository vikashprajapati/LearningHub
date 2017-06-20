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
Route::get('/resources','pagescontroller@getresources');
Route::get('/','pagescontroller@getindex');
Route::get('/forum','pagescontroller@forum');
Route::get('/_n','pagescontroller@nav');
