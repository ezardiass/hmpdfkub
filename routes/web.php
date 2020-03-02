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

Route::get('/', 'HomeController@GetHomeView');

Route::get('/profil', function () {
    return view('page.profil');
});

Route::get('/bidang-kerja/{id}', 'HomeController@GetBidangKerja');


//Berita
Route::get('/berita', 'NewsController@viewAllNews');

Route::get('/berita/{id}', 'NewsController@viewNewsByID');

//Galeri
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

//News
Route::get('/admin/berita', 'NewsController@viewAdmin');

Route::post('/admin/berita/tambah', 'NewsController@addNews');

Route::get('/admin/berita/update/{id}', 'NewsController@viewUpdate');

Route::post('/admin/berita/update/send/{id}', 'NewsController@editNews');

Route::delete('/admin/berita/delete/{id}', 'NewsController@deleteNews');

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