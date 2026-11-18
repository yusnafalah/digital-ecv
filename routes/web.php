
<?php

use Illuminate\Support\Facades\Route;

// BERANDA
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// TENTANG SAYA
Route::get('/tentang-saya', function () {
    return view('pages.about');
})->name('about');

// PENDIDIKAN
Route::get('/pendidikan', function () {
    return view('pages.education');
})->name('education');

// PENGALAMAN
Route::get('/pengalaman', function () {
    return view('pages.experience');
})->name('experience');

// KEAHLIAN
Route::get('/keahlian', function () {
    return view('pages.skills');
})->name('skills');

// PORTOFOLIO
Route::get('/portofolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

// KONTAK
Route::get('/kontak', function () {
    return view('pages.contact');
})->name('contact');
