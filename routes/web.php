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

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/replacetext', function () {
    return view('js1');
});

Route::get('/operasi', function () {
    return view('js2');
});

Route::get('/link', function () {
    return view('link');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/responsive', function () {
    return view('responsive');
});

Route::get('/style', function () {
    return view('style');
});

Route::get('/validasi', function () {
    return view('validasi');
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/landingpage', function () {
    return view('landing-page');
});

Route::get('perkalian','App\Http\Controllers\DosenController@index');

Route::get('show','App\Http\Controllers\DosenController@showBlog');
