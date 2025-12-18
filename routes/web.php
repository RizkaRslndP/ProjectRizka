<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/posts', function () {
    // $posts = Post::with(['author', 'category'])->latest()->get();
    $posts = Post::latest()->get();
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

//Eager Loading Post::with(['author', 'category'])->latest()->get();

Route::get('/posts/{post:slug}', function (Post $post) {

    // $post = Post::find($id);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = Post::with(['category', 'author'])->latest()->get();

    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = Post::with(['category', 'author'])->latest()->get();
    return view('posts', ['title' =>  ' Articles in: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/login', function () {
    return view('login', ['title' => 'Login Page']);
});

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});

Route::get('/edit-profil', function () {
    return view('edit-profil', ['title' => 'Edit Profile']);
});
