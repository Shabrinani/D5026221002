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

Route::get('/orang/{nama}', 'App\Http\Controllers\DosenController@shownama');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah', 'App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store', 'App\Http\Controllers\PegawaiController@store');
Route::get('pegawai/edit/{id}', 'App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update', 'App\Http\Controllers\PegawaiController@update');
Route::get('pegawai/hapus/{id}', 'App\Http\Controllers\PegawaiController@hapus');
Route::get('pegawai/view/{id}', 'App\Http\Controllers\PegawaiController@view');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/nilai','App\Http\Controllers\NilaiController@index');
Route::get('/nilai/tambah','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilai/store','App\Http\Controllers\NilaiController@store');

Route::get('/meja', 'App\Http\Controllers\MejaController@index');
Route::get('/meja/tambah', 'App\Http\Controllers\MejaController@tambah');
Route::post('/meja/store', 'App\Http\Controllers\MejaController@store');
Route::get('meja/edit/{kode}', 'App\Http\Controllers\MejaController@edit');
Route::post('/meja/update', 'App\Http\Controllers\MejaController@update');
Route::get('meja/hapus/{kode}', 'App\Http\Controllers\MejaController@hapus');
Route::get('meja/view/{kode}', 'App\Http\Controllers\MejaController@view');

