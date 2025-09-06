<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Administrador Panel";
})->name('admin');
