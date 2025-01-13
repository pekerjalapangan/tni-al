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
    return view('layout.beranda');
});

Route::get('/sejarah', function () {
    return view('layout.sejarah');
});

Route::get('/kepangkatan', function () {
    return view('layout.kepangkatan');
});

Route::get('/pasukan-khusus', function () {
    return view('layout.pasukan-khusus');
});

Route::get('/visimisi', function () {
    return view('layout.visimisi');
});

Route::get('/tugas', function () {
    return view('layout.tugas');
});

Route::get('/doktrin', function () {
    return view('layout.doktrin');
});

Route::get('/trisila', function () {
    return view('layout.trisila');
});

Route::get('/strukturorganisasi', function () {
    return view('layout.strukturorganisasi');
});

Route::get('/jatidiri', function () {
    return view('layout.jatidiri');
});

Route::get('/saptamarga', function () {
    return view('layout.saptamarga');
});

Route::get('/sumpahprajurit', function () {
    return view('layout.sumpahprajurit');
});

Route::get('/8wajibtni', function () {
    return view('layout.8wajibtni');
});

Route::get('/11azaztni', function () {
    return view('layout.11azaztni');
});

Route::get('/login', function () {
    return view('layout.login');
});



