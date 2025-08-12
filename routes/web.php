<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

Route::middleware(['role.redirect'])->group(function () {
    Route::get('/', [RouteController::class, 'authentication'])->name('authentication');

    Route::get('/instructor',[RouteController::class, 'instructorPanel'])->name('instructor.panel');

    Route::get('/admin', [RouteController::class, 'adminPanel'])->name('admin.panel');
});
