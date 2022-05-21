<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Naufal",
        "email" => "naufal@gmail.com"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => 'User Post',
//         'posts' => $author->posts->load('category', 'user'),
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
