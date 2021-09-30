<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AtmController;

use App\Http\Controllers\AuthController;


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
/*Route::get('/', function () {
    //return view('welcome');
    return view('atm');
});*/
Route::get('/', [AtmController::class, 'index'])->name('index');


/*Route::get('/sifremi-unuttum', function () {
    //return view('welcome');
    return view('sifremiUnuttum');
})->name('sifremiUnuttum');*/

Route::get('/sifremi-unuttum', [AtmController::class, 'sifremiUnuttum'])->name('sifremiUnuttum');


/*Route::get('/giris-sayfasi', function () {
    //return view('welcome');
    return view('girissayfasi');
}) ->name('girissayfasi');*/

Route::get('/giris-sayfasi', [AtmController::class, 'girisSayfasi'])->name('girissayfasi');


/*Route::get('/para-cek', function () {
    //return view('welcome');
    return view('paracek');
}) ->name('paracek');*/

Route::get('/para-cek', [AtmController::class, 'paraCek'])->name('paracek'); /*1*/
Route::post('/para-cek', [AtmController::class, 'postParaCek'])->name('post.paracek'); /*2*/

/*Route::get('/para-ekle', function () {
    //return view('welcome');
    return view('paraekle');
}) ->name('paraekle');*/

Route::get('/para-ekle', [AtmController::class, 'paraEkle'])->name('paraekle');
Route::post('/para-ekle', [AtmController::class, 'postParaEkle'])->name('post.paraEkle');

/*Route::get('/cikis', function () {
    //return view('welcome');
    return view('cikis');
}) ->name('cikis');*/

Route::get('/cikis', [AuthController::class, 'postcikis'])->name('cikis');
Route::post('/cikis', [AtmController::class, 'postcikis'])->name('post.cikis');

//Route::get('/deneme', [AtmController::class, 'deneme'])->name('deneme');
Route::post('/deneme', [AtmController::class, 'postdenemeSayfasi'])->name('post.denemeSayfasi');

Route::get('/deneme', function () {
    $data=[
        "ad"=>"zeynep",
        "soyad"=>"kiymik"
    ];
    return view('deneme',compact ( 'data'));
}) ->name('deneme');