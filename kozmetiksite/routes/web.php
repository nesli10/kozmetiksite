<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('anasayfa');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/admin', function () {
    return view('admin');
});
Route::get('/hakkimizda', function () {
    return view('hakkimizda');
});
Route::get('/misyonvizyon', function () {
    return view('misyonvizyon');
});
Route::get('/iletisim', function () {
    return view('iletisim');
});
Route::get('/makyaj', function () {
    return view('makyaj');
});
Route::get('/pazarlama', function () {
    return view('pazarlama');
});
Route::get('/reklam', function () {
    return view('reklam');
});
Route::get('/bilgiislem', function () {
    return view('bilgiislem');
});
Route::get('/kisiselbakim', function () {
    return view('kisiselbakim');
});
Route::get('/sacbakim', function () {
    return view('sacbakim');
});
Route::get('/slider1', function () {
    return view('slider1');
});
Route::get('/slider2', function () {
    return view('slider2');
});
Route::get('/slider3', function () {
    return view('slider3');
});
Route::get('/duyuru1', function () {
    return view('duyuru1');
});
Route::get('/duyuru2', function () {
    return view('duyuru2');
});
Route::get('/duyuru3', function () {
    return view('duyuru3');
});
Route::get('/duyuru4', function () {
    return view('duyuru4');
});
Route::get('/duyuru5', function () {
    return view('duyuru5');
});
Route::get('/duyurudevam', function () {
    return view('duyurudevam');
});






