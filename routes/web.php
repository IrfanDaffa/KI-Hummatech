<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('home');
});
*/

/* Tugas 1 Route */
Route::get('/siswa/{nama}/{jurusan}/{makanan}', function ($nama, $jurusan, $makanan) {
    return "Nama saya $nama Saya dari jurusan $jurusan Makanan favorit saya adalah $makanan";
});


/* Tugas 2 Route */
Route::prefix('/perpustakaan')->group(function () {
    Route::get('/buku', function () {
        return '<h1>Daftar Buku</h1>
                <ol>
                    <li>Laskar Pelangi - Andrea Hinata</li>
                    <li>Belajar Pemrograman Web dengan PHP dan MySQL - Budi Rahardjo</li>
                    <li>Pemrograman Java untuk Pemula - Agus Kurniawan</li>
                </ol>';
    });

    Route::get('/peminjaman', function () {
        return '<h1>Daftar Peminjaman</h1>
                <ol>
                    <li>Laskar Pelangi - Dipinjam oleh Dimas</li>
                    <li>Belajar Pemrograman Web dengan PHP dan MySQL - Dipinjam oleh Rama</li>
                </ol>';
    });

    Route::get('/petugas', function () {
        return '<h1>Daftar Petugas</h1>
                <ol>
                    <li>Irfan Daffa</li>
                    <li>Ilham Raditya</li>
                </ol>';
    });
});
