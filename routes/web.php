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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Avriansyah Bahtiar",
        "email" => "avriansyah@gmail.com",
        "image" => "kura.jpg"
    ]); 
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama", 
            "slug" => "judul-post-pertama",
            "author" => "Avriansyah Bahtiar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt dolore quam autem assumenda quaerat similique blanditiis architecto in, tempore inventore doloremque error provident dolorum dicta dolores odio quia atque eos sapiente impedit cupiditate iste expedita eaque! Consectetur nisi vitae, dicta totam nulla eveniet dignissimos explicabo reprehenderit porro! Maxime provident a quae iste assumenda, quisquam fugiat unde, qui est incidunt consectetur culpa molestias ratione eligendi debitis neque, placeat illo voluptatum soluta cum. Similique cupiditate reprehenderit quia ipsum temporibus totam voluptatibus pariatur?"
        ],
        [
            "title" => "Judul Post Kedua", 
            "slug" => "judul-post-kedua",
            "author" => "Avriansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt dolore quam autem assumenda quaerat similique blanditiis architecto in, tempore inventore doloremque error provident dolorum dicta dolores odio quia atque eos sapiente impedit cupiditate iste expedita eaque! Consectetur nisi vitae, dicta totam nulla eveniet dignissimos explicabo reprehenderit porro! Maxime provident a quae iste assumenda, quisquam fugiat unde, qui est incidunt consectetur culpa molestias ratione eligendi debitis neque, placeat illo voluptatum soluta cum. Similique cupiditate reprehenderit quia ipsum temporibus totam voluptatibus pariatur?"
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" =>  $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama", 
            "slug" => "judul-post-pertama",
            "author" => "Avriansyah Bahtiar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt dolore quam autem assumenda quaerat similique blanditiis architecto in, tempore inventore doloremque error provident dolorum dicta dolores odio quia atque eos sapiente impedit cupiditate iste expedita eaque! Consectetur nisi vitae, dicta totam nulla eveniet dignissimos explicabo reprehenderit porro! Maxime provident a quae iste assumenda, quisquam fugiat unde, qui est incidunt consectetur culpa molestias ratione eligendi debitis neque, placeat illo voluptatum soluta cum. Similique cupiditate reprehenderit quia ipsum temporibus totam voluptatibus pariatur?"
        ],
        [
            "title" => "Judul Post Kedua", 
            "slug" => "judul-post-kedua",
            "author" => "Avriansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt dolore quam autem assumenda quaerat similique blanditiis architecto in, tempore inventore doloremque error provident dolorum dicta dolores odio quia atque eos sapiente impedit cupiditate iste expedita eaque! Consectetur nisi vitae, dicta totam nulla eveniet dignissimos explicabo reprehenderit porro! Maxime provident a quae iste assumenda, quisquam fugiat unde, qui est incidunt consectetur culpa molestias ratione eligendi debitis neque, placeat illo voluptatum soluta cum. Similique cupiditate reprehenderit quia ipsum temporibus totam voluptatibus pariatur?"
        ]
    ];

    $new_post = [];

    foreach($blog_posts as $post) {
         if($post["slug"] == $slug) {
            $new_post = $post;
         }
    }

    return view('post', [
        "title" => "Single Post", 
        "post" => $new_post
    ]);
});
