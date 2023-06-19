<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
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
        "name" => "Gerry Satria Halim",
        "email" => "gerrysatria10@gmail.com",
        "image" => "gerry.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
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

    return view('posts', [
        "title" => "Blogs",
        "posts" => $blog_post
    ]);
});

Route::get('posts/{slug}', function($slug){

    $blog_post = [
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

    $new_post = [];
    
    foreach($blog_post as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    };

    return view('post', [
        "title" => "Single Post",
        "posts" => $new_post
    ]);
});