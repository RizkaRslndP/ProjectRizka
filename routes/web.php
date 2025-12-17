<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login', ['title' => 'Login Page']);
});

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Rizka Rosalinda Pratiwi',
            'date' => '1 January 2025',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac vestibulum erat. Cras vulputate auctor lectus at consequat. Donec in libero euismod, cursus nunc at, fermentum massa.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Rizka Rosalinda Pratiwi',
            'date' => '1 January 2025',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae repudiandae, non voluptates placeat impedit sequi nam, quod sapiente voluptate, possimus inventore ratione eligendi! Maxime velit aperiam est earum, minus ducimus.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Rizka Rosalinda Pratiwi',
            'date' => '1 January 2025',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac vestibulum erat. Cras vulputate auctor lectus at consequat. Donec in libero euismod, cursus nunc at, fermentum massa.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Rizka Rosalinda Pratiwi',
            'date' => '1 January 2025',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae repudiandae, non voluptates placeat impedit sequi nam, quod sapiente voluptate, possimus inventore ratione eligendi! Maxime velit aperiam est earum, minus ducimus.'
        ]
    ];

    $post = Arr::first($posts, function ($item) use ($slug) {
        return $item['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});

Route::get('/edit-profil', function () {
    return view('edit-profil', ['title' => 'Edit Profile']);
});
