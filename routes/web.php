<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('App');
})->name('home');

Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');


Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');

Route::get('/registration', function () {
    return Inertia::render('Registration');
})->name('registration');


Route::post('/add-product', [ProductController::class,'store'])->name('add-product');
