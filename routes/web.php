<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//no1
Route::get('/', function () {
    return view('homepage');
});

//no2
Route::get('/product', function () {
        return view('product', ['pesan' => 'Menampilkan halaman product']);
    });
    Route::get('/news', function () {
        return view('news', ['pesan' => 'Menampilkan berita']);
    });
    Route::get('/program', function () {
        return view('product', ['pesan' => 'Menampilkan ']);
    });
    Route::get('/aboutus', function () {
        return view('about-us', ['pesan' => 'Menampilkan halaman product']);
    });
    Route::get('/contact', function () {
        return view('contact', ['pesan' => 'Menampilkan halaman product']);
    });
    