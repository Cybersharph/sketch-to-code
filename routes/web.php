<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
})->name('home');

Route::get('/about', function () {
    return view('pages/about');
})->name('about');

Route::get('/contact', function () {
    return view('pages/contact');
})->name('contact');

Route::get('/how', function () {
    return view('pages/how');
})->name('how');

Route::get('/publications', function () {
    return view('pages/publications');
})->name('publications');
