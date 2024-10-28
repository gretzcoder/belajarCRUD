<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

Route::get('/', function () {
    return redirect('/anggota');
});

Route::resource('/anggota', AnggotaController::class);