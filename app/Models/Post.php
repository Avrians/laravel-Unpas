<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
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

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts  = static::all();

        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] == $slug) {
        //         $post = $p;
        //     }
        // }

        // return $post;
        return $posts->firstWhere('slug', $slug);
        
    }
}
