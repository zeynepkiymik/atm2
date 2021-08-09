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
/* Burası ana sayfa  */
Route::get('/', function () {
    //return view('welcome');
    return view('atm');
});


Route::get('/sifremi-unuttum', function () {
    //return view('welcome');
    return view('sifremiUnuttum');
})->name('sifremiUnuttum');

Route::get('/giris-sayfasi', function () {
    //return view('welcome');
    return view('girissayfasi');
}) ->name('girissayfasi');

Route::get('/para-cek', function () {
    //return view('welcome');
    return view('paracek');
}) ->name('paracek');

Route::get('/para-gonder', function () {
    //return view('welcome');
    return view('paragonder');
}) ->name('paragonder');