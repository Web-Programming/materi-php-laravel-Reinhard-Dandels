<?php
use App\Http\Controllers\Materi;
use App\Http\Controllers\Prodi;
use App\Http\Controllers\Fakultas;
use App\Http\Controllers\Mahasiswa;
use App\Http\Controllers\Dosen;
use Illuminate\Support\Facades\Route;

Route::get('/profil', function () {
    return view('profil');
});


Route::resource('materi', Materi::class);

Route::resource('prodi', Prodi::class);

Route::resource('fakultas', Fakultas::class);

Route::resource('mhs', Mahasiswa::class);

Route::resource('dosen', Dosen::class);



Route::get('/', function () {
    return view('welcome');
});
