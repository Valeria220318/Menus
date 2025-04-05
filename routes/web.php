<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/income', function () {
    return view('pages.income');
})->name('income');

Route::get('/bills', function () {
    return view('pages.bills');
})->name('bills');

