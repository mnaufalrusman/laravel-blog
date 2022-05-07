<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Naufal Rusman",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi vitae, distinctio enim, non cumque ullam quisquam a quis, in itaque repudiandae ducimus labore! Voluptas aut ipsa iure tempora facere iste qui illo? Vero quia doloribus excepturi dolore recusandae quae natus deserunt vel necessitatibus veritatis unde, doloremque architecto ab quam in nesciunt mollitia! Saepe quod, quibusdam aut debitis architecto earum fuga hic ullam assumenda repellendus odit velit, molestias animi magnam sapiente atque nihil ab, laboriosam sint soluta reprehenderit reiciendis? Reiciendis dolor commodi voluptas ratione quaerat excepturi adipisci ad incidunt quasi.",

        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dhea Ariyani",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima excepturi vitae, distinctio enim, non cumque ullam quisquam a quis, in itaque repudiandae ducimus labore! Voluptas aut ipsa iure tempora facere iste qui illo? Vero quia doloribus excepturi dolore recusandae quae natus deserunt vel necessitatibus veritatis unde, doloremque architecto ab quam in nesciunt mollitia! Saepe quod, quibusdam aut debitis architecto earum fuga hic ullam assumenda repellendus odit velit, molestias animi magnam sapiente atque nihil ab, laboriosam sint soluta reprehenderit reiciendis? Reiciendis dolor commodi voluptas ratione quaerat excepturi adipisci ad incidunt quasi.",

        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


Route::get('/posts/{slug}', function ($slug) {
    return view('post', [
        "title" => "Single Post"
    ]);
});
