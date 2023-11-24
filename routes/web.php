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
Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
Route::get('tampiljam/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', 'App\Http\Controllers\DosenController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\DosenController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\DosenController@kontak');

Route::get('shop', function () {
    return view('shop');
});
Route::get('about', function () {
    return view('about');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('shop-single', function () {
    return view('shop-single');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('index', function () {
    return view('index');
});
Route::get('DeProLandingPage', function () {
    return view('DeProLandingPage');
});
Route::get('Bootstrap', function () {
    return view('Bootstrap');
});
Route::get('LinkTree', function () {
    return view('LinkTree');
});
Route::get('js1', function () {
    return view('js1');
});
Route::get('hello', function () {
    return view('hello');
});


Route::get('jumlah', function (){
    $hasil = 2+3 ;
    return "Hasil Penjumlahan = " . (String)$hasil ;
});

Route::get('halo', function () {
    return "selamar Datang di Situs web";
});

Route::get('blog2', function () {
    return view('blog');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
