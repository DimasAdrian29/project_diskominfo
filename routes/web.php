<?php

use Illuminate\Support\Facades\Route;

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

// ROLE 1: ADMIN APTIKA
Route::prefix('admin/aptika')->name('admin.aptika.')->group(function () {
    Route::get('/', function () { return view('admin.aptika.dashboard.index'); })->name('dashboard');
    Route::get('/penilaian-proposal', function () { return view('admin.aptika.penilaian_proposal.index'); })->name('penilaian-proposal');
    Route::get('/manajemen-data-master', function () { return view('admin.aptika.manajemen_data_master.index'); })->name('manajemen-data-master');
    Route::get('/pengerjaan-proyek', function () { return view('admin.aptika.pengerjaan_proyek.index'); })->name('pengerjaan-proyek');
    Route::get('/pengerjaan-proyek/detail', function () { return view('admin.aptika.pengerjaan_proyek.detail'); })->name('pengerjaan-proyek.detail');
    Route::get('/penundaan-aplikasi', function () { return view('admin.aptika.penundaan_aplikasi.index'); })->name('penundaan-aplikasi');
});

// ROLE 2: ADMIN TIK
Route::prefix('admin/tik')->name('admin.tik.')->group(function () {
    Route::get('/', function () { return view('admin.tik.dashboard.index'); })->name('dashboard');
    Route::get('/pengujian-keamanan', function () { return view('admin.tik.pengujian_keamanan.index'); })->name('pengujian-keamanan');
    Route::get('/rekomendasi-infrastruktur', function () { return view('admin.tik.rekomendasi_infrastruktur.index'); })->name('rekomendasi-infrastruktur');
});

// ROLE 3: ADMIN PERSANDIAN
Route::prefix('admin/persandian')->name('admin.persandian.')->group(function () {
    Route::get('/', function () { return view('admin.persandian.dashboard.index'); })->name('dashboard');
    Route::get('/pengujian-aplikasi', function () { return view('admin.persandian.pengujian_aplikasi.index'); })->name('pengujian-aplikasi');
    Route::get('/pengujian-aplikasi/detail', function () { return view('admin.persandian.pengujian_aplikasi.detail'); })->name('pengujian-aplikasi.detail');
});

// ROLE 4: KEPALA DINAS (KADIN)
Route::prefix('admin/kadin')->name('admin.kadin.')->group(function () {
    Route::get('/', function () { return view('admin.kadin.dashboard.index'); })->name('dashboard');
    Route::get('/monitoring', function () { return view('admin.kadin.monitoring.index'); })->name('monitoring');
});
