<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('topic', function () {
    return Inertia::render('Topic');
})->middleware(['auth', 'verified'])->name('topic');

Route::get('course', function () {
    return Inertia::render('Course');
})->middleware(['auth', 'verified'])->name('course');


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
