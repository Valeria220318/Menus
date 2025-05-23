<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/income', [PageController::class, 'income'])->name('income');
Route::get('/bills', [PageController::class, 'bills'])->name('bills');


