<?php

use App\Http\Controllers\PemesananController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
    // return view('/component/home');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/mitra', function () {
    return view('mitra');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/eventDetail', function () {
    return view('eventDetail');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/kebijakanPrivasi', function () {
    return view('kebijakanPrivasi');
});
Route::get('/mitra', function () {
    return view('mitra');
});
Route::get('/partnership', function () {
    return view('partnership');
});
Route::get('/pemesanan',[PemesananController::class,'crud']);
Route::get('/syaratKetentuan', function () {
    return view('syaratKetentuan');
});

