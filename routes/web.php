<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'nama' => 'David Nasrulloh',
        'umur' => 25,
        'pekerjaan' => 'Pengembang Perangkat Lunak'
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact'
    ]);
});
