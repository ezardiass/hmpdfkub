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
    return view('page.home');
});

Route::get('/profil', function () {
    return view('page.profil');
});

Route::get('/bidang-kerja', function () {
    return view('page.bidang-kerja');
});

Route::get('/aktifitas', function () {
    return view('page.aktifitas');
});

Route::get('/berita', function () {
    return view('page.berita');
});

Route::get('/berita/detail', function () {
    return view('page.berita-detail');
});

Route::get('/galeri', function () {
    return view('page.galeri');
});

Route::get('/merchandise', function () {
    return view('page.merchandise');
});

Route::get('/sambat-kuy', function () {
    return view('page.form');
});

// Admin Page
Route::get('/login', function () {
    return view('admin.login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/berita', function () {
    return view('admin.berita');
});

Route::get('/admin/event', function () {
    return view('admin.event');
});

Route::get('/admin/galeri', function () {
    return view('admin.galeri');
});

Route::get('/admin/merchandise', function () {
    return view('admin.merchandise');
});

Route::get('/admin/proker', function () {
    return view('admin.proker');
});