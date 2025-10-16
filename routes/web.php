<?php

use App\Livewire\Login;
use App\Models\employee;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', Login::class)->name('login');
    Route::get('/login', Login::class);
});

Route::middleware('auth')->group(function () {

    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::view('/karyawan/index', 'superadmin.karyawan.index')->name('superadmin.karyawan.index');
    Route::view('/trainee/index', 'superadmin.trainee.index')->name('superadmin.trainee.index');
    Route::view('/merit/index', 'superadmin.merit.index')->name('superadmin.merit.index');

    Route::get('/karyawan/detail/{id}', function ($id) {
        return view('superadmin.karyawan.detailkaryawan', ['employee' => Employee::findOrFail($id)]);
    })->name('superadmin.karyawan.detailkaryawan');
});
