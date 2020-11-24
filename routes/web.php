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
    return view('index');
});

Route::get('/in', function () {
    return view('auth.login');
});


Route::get('/epengalaman', 'HomeController@index')->name('home');

Route::get('dashboard', function () {
   return view('dashboard');
});


Route::get('dashboardv', 'App\Http\Controllers\pengalamanController@pengalamanedit')->name('home');

Route::get('upload', 'App\Http\Controllers\UploadController@upload');
Route::post('/upload/proses', 'App\Http\Controllers\UploadController@store');

Route::get('pengalamann', 'App\Http\Controllers\pengalamanController@pengalaman');
Route::get('lengkapp{id}', 'App\Http\Controllers\pengalamanController@lengkapp');
Route::get('epengalaman', 'App\Http\Controllers\pengalamanController@pengalamanedit');
Route::post('tambahpengalaman', 'App\Http\Controllers\pengalamanController@tambah');
Route::get('editpeng{id}', 'App\Http\Controllers\pengalamanController@edit');
Route::get('hapuspeng{id}', 'App\Http\Controllers\pengalamanController@hapus');


Route::get('teamm', 'App\Http\Controllers\teamController@team');
Route::get('eteam', 'App\Http\Controllers\teamController@teamedit');
Route::post('tambahteam', 'App\Http\Controllers\teamController@tambah');
Route::post('team/update', 'App\Http\Controllers\teamController@update');
Route::get('hapusteam{id}', 'App\Http\Controllers\teamController@hapus');
Route::get('editteam{id}', 'App\Http\Controllers\teamController@edit');

Route::get('tpesan', 'App\Http\Controllers\pesanController@pesan');
Route::post('tambahpesan', 'App\Http\Controllers\pesanController@insert');

Route::get('tambahpeng', function () {
    return view('pengalaman/tambahpeng');
});

Route::get('formtambahteam', function () {
    return view('team/tambahteam');
});


Route::get('about', function () {
    return view('about');
});

Route::get('layanan', function () {
    return view('layanan');
});

Route::get('BA', function () {
    return view('BA');
});
Route::get('BB', function () {
    return view('BB');
});
Route::get('BIT', function () {
    return view('BIT');
});
Route::get('BL', function () {
    return view('BL');
});
Route::get('kontak', function () {
    return view('kontak');
});

Route::get('pdetail', function () {
    return view('pdetail');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
