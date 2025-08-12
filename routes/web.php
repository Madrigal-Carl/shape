<?php

use App\Models\Account;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::middleware(['role.redirect'])->group(function () {
    Route::get('/', function () {
        return view('authentication');
    });

    Route::get('/instructor', function () {
        return view('instructor.dashboard');
    });

    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
});
