<?php

use App\Http\Controllers\PemesananController;
use App\Http\Controllers\pemesananfikController;
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
Route::get('/pemesananSma',[PemesananController::class,'katsma'])->name('pemesananSma');
Route::get('/pemesananFik',[pemesananfikController::class,'katfik'])->name('pemesananFik');


Route::post('/pemesananSma/store', [PemesananController::class, 'store'])->name('pemesananSma.store');
Route::post('/pemesananFik/store', [pemesananfikController::class, 'store'])->name('pemesananFik.store');
Route::get('/syaratKetentuan', function () {
    return view('syaratKetentuan');
Route::resource('/azisshow', [PemesananController::class,'show']);
});

