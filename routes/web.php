<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Index');
});
Route::get('/our-projects', function () {
    return Inertia::render('Projects/Index');
});
Route::get('/what-we-do', function () {
    return Inertia::render('Do/Index');
});
Route::get('/about-integral', function () {
    return Inertia::render('About/Index');
});
Route::get('/contact-us', function () {
    return Inertia::render('Contact/Index');
});
