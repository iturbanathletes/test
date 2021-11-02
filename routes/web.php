<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
   return view('welcome');
});
Route::get('/', function () {
   return view('pages.dashboard');
});
Route::get('/club', function () {
   return view('clubs.index');
});
Route::get('/divisi', function () {
   return view('divisis.index');
});
Route::get('/jabatan', function () {
   return view('jabatans.index');
});
Route::get('/karyawan', function () {
   return view('karyawans.index');
});
