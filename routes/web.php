<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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
    return view('welcome');
});

Route::get ('halaman-2/{nama}/{jk}', function ($nama,$jk) {
    return '<fieldset>halaman profile : ' .$nama. '</fieldset><br><fieldset>dengan jenis kelamin :'.$jk . '</fieldset>';
});

Route::get ('halaman-3/{nama?}', function ($nama = 'belum ada nama') {
    return 'profile ' .$nama;
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('about/{nama}', function ($nama) {
    $calculator = 1 +5;
    return view('about' , compact('nama', 'calculator'));
});

// route optional parameter
Route::get('pesan/{menu?}', function ($a = "silahkan masukan pesanan") {
    return view('pages.pesan' , compact('a'));
});

Route::get('menu/{a?}/{b?}/{c?}', function ($a = "silahkan masukan pesanan",$b=null,$c=null) {
    return view('pages.menu' , compact('a','b','c'));
});

Route::get('makanan/{makanan}/{minuman}/{harga}', function ($makanan, $minuman, $harga) {
    return view('pages.makanan' , compact('makanan','minuman','harga'));
});

Route :: get('hallo','cobaController@hallo');
Route :: get('profile','cobaController@profile');
Route :: get('twitter/{perkalian}-{nama}','cobaController@facebook');
Route :: get('siswa','cobaController@siswa');
Route :: get('BMI/{berat_badan}-{tinggi}','cobaController@BMI');
Route :: get('dosen','cobaController@skripsi');
Route :: get('mahasiswa','CobaController@mahasiswa');
Route :: get('nilai','CobaController@nilai');
Route :: get('belanja/', 'CobaController@belanja');

Route::get('post','PostController@tampil');
Route::get('post/{id}','PostController@search');
Route::get('post/tambah/{title}/{content}','PostController@tambah');
Route::get('post/edit/{id}/{title}/{content}','PostController@edit');
Route::get('post/delete/{id}','PostController@hapus');
Route::get('siswa','PostController@tampil');

//route siswa

Route::get('siswa',[SiswaController::class,'tampil']);



// HTTP VERB
// GET, POST, PUT/PATCH, DELETE
