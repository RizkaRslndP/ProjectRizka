<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('login', function () {
    return view('auth.login', ['title' => 'Login']);
});
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

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

Route::get('/repository', function () {
    return view('repository.index', ['title' => 'Document Repository']);
});

Route::get('/repository/{document}', function () {
    return view('repository.show', ['title' => 'Submit Document']);
});

Route::get('/dashboard', function () {
    return view('dashboard.index', ['title' => 'Dashboard']);
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('repository.index', ['title' => 'index']);
    });

    Route::post('/repository/{create}', function () {
        return view('repository.create', ['title' => 'Manage Posts']);
    });
    Route::put('/repository/{document}/edit', function () {
        return view('repository.edit', ['title' => 'Edit Post']);
    });
    Route::delete('/repository/{document}', function () {
        return view('repository.index', ['title' => 'index']);
    });
});
Route::get('/dashboard/categories', function () {
    return view('dashboard.categories.index', ['title' => 'Manage Categories']);
});
