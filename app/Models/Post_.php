<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post_
{
    // use HasFactory;
    private static $blog_post = [
        [
            "title" => "Judul - 1",
            "slug" => "judul-1",
            "author" => "Nama - 1",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus quia architecto magni pariatur sit, quae quasi eligendi aspernatur quo, odit rem accusantium ducimus corporis consequuntur suscipit aut, assumenda officia fugiat! Vitae, doloribus. Porro, minima? Maxime, aliquid. Iure commodi quam qui porro ipsam aspernatur beatae quo reprehenderit voluptatibus mollitia dolore animi eum modi ut odio, molestiae ex nostrum consequuntur sit blanditiis corrupti praesentium pariatur? Eveniet doloremque molestias corporis asperiores, totam, qui sit expedita, amet earum quo accusantium saepe iure quas. Repellat?"
        ], 
        [
            "title" => "Judul - 2",
            "slug" => "judul-2",
            "author" => "Nama - 2",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus quia architecto magni pariatur sit, quae quasi eligendi aspernatur quo, odit rem accusantium ducimus corporis consequuntur suscipit aut, assumenda officia fugiat! Vitae, doloribus. Porro, minima? Maxime, aliquid. Iure commodi quam qui porro ipsam aspernatur beatae quo reprehenderit voluptatibus mollitia dolore animi eum modi ut odio, molestiae ex nostrum consequuntur sit blanditiis corrupti praesentium pariatur? Eveniet doloremque molestias corporis asperiores, totam, qui sit expedita, amet earum quo accusantium saepe iure quas. Repellat?"
        ]
    ];

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
