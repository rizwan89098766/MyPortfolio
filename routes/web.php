<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\indexController;
use App\Http\Controllers\frontend\contactController;
use App\Http\Controllers\frontend\portfolioController;
use App\Http\Controllers\frontend\serviceController;




Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/portfolio', function () {
    return view('frontend.portfolio');
})->name('index');

Route::get('/service', function () {
    return view('frontend.service');
})->name('index');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('index');
