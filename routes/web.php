<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [SessionController::class, 'show'])->name('login.show');
    Route::post('/login', [SessionController::class, 'attempt'])->name('login.attempt');
});


Route::get('/dummy', function () {

    $a = Post::where('slug', 'harum-et-non-et-qui')->get();

//   var_dump($a);
//   die;
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
