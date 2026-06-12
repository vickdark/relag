<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/inscripcion', function () {
    return view('inscripcion');
})->name('inscripcion');
