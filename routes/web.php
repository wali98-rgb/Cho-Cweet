<?php

use Illuminate\Support\Facades\Route;

// Main Route
Route::get('/', function () {
    return view('frontend.dashboard');
})->name('dashboard');


// Frontend Route
Route::get('/achivements', function () {
    return view('frontend.pages.achivements');
})->name('achivements');

Route::get('/articles', function () {
    return view('frontend.pages.articles');
})->name('articles');

Route::get('/companies', function () {
    return view('frontend.pages.company');
})->name('companies');

Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contacts');

Route::get('/facilities', function () {
    return view('frontend.pages.facilities');
})->name('facilities');

Route::get('/history', function () {
    return view('frontend.pages.history');
})->name('histories');

Route::get('/products', function () {
    return view('frontend.pages.product');
})->name('products');
