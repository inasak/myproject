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
Route::get('/index', function () {
    return view('index');
});
Route::get('/index-1', function () {
    return view('index-1');
});
Route::get('/index-3', function () {
    return view('index-3');
});
Route::get('/index-5', function () {
    return view('index-5');
});
Route::get('/index-6', function () {
    return view('index-6');
});