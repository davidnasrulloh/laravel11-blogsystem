<?php

use Illuminate\Support\Arr;
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

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Posts',
        'posts' => [
            [
                'id' => 1,
                'title' => 'Judul Artikel 1',
                'slug' => 'judul-artikel-1',
                'author' => 'David Nasrulloh',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed ipsum distinctio ipsam blanditiis ex qui! Adipisci et iure quidem laudantium!'
            ],
            [
                'id' => 2,
                'title' => 'Judul Artikel 2',
                'slug' => 'judul-artikel-2',
                'author' => 'David Nasrulloh',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed ipsum distinctio ipsam blanditiis ex qui! Adipisci et iure quidem laudantium!'
            ]
        ]
    ]);
});

Route::get('/posts/{slug}', function($slug){

    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'David Nasrulloh',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed ipsum distinctio ipsam blanditiis ex qui! Adipisci et iure quidem laudantium!'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'slug' => 'judul-artikel-2',
            'author' => 'David Nasrulloh',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed ipsum distinctio ipsam blanditiis ex qui! Adipisci et iure quidem laudantium!'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });

    // dd($post);
    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact'
    ]);
});
