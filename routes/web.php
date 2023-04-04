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



Route::get('/', function() {
    return view('bumdes.initialPage.index');
});

Route::get('/login', function() {
    return view('bumdes.initialPage.login');
});

Route::get('/kelebihan', function() {
    return view('bumdes.initialPage.kelebihan');
});

Route::get('/fitur', function() {
    return view('bumdes.initialPage.fitur');
});

Route::get('/caraOrder', function() {
    return view('bumdes.initialPage.caraOrder');
});

Route::get('/kontak', function() {
    return view('bumdes.initialPage.kontak');
});
//tesss