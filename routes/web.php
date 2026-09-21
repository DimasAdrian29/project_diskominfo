<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('opd.landing');
});

Route::get('/opd', function () {
    return view('opd.landing');
});

Route::get('/registrasi-aplikasi', function () {
    return view('opd.registrasi_aplikasi.formulir');
});

Route::get('/penundaan-aplikasi', function () {
    return view('opd.penundaan_aplikasi.formulir');
});

Route::get('/penonaktifan-aplikasi', function () {
    return view('opd.penonaktifan_aplikasi.formulir');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/admin/pengerjaan-proyek', function () {
    return view('admin.pengerjaan_proyek.index');
})->name('admin.pengerjaan-proyek');

Route::get('/admin/pengerjaan-proyek/detail', function () {
    return view('admin.pengerjaan_proyek.detail');
})->name('admin.pengerjaan-proyek.detail');

Route::get('/admin', function () {
    return view('admin.dashboard.index');
})->name('admin.dashboard');

Route::get('/admin/manajemen-data-master', function () {
    return view('admin.manajemen_data_master.index');
})->name('admin.manajemen-data-master');

Route::get('/admin/penilaian-proposal', function () {
    return view('admin.penilaian_proposal.index');
})->name('admin.penilaian-proposal');

Route::get('/admin/pengujian-aplikasi', function () {
    return view('admin.pengujian_aplikasi.index');
})->name('admin.pengujian-aplikasi');

Route::get('/admin/pengujian-aplikasi/detail', function () {
    return view('admin.pengujian_aplikasi.detail');
})->name('admin.pengujian-aplikasi.detail');
