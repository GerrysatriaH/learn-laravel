<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            'title' => 'List Product',
            'active' => 'product',
            'posts' => Post::get()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            'title' => 'Detail Product',
            'active' => 'product',
            'post' => $post
        ]);
    }
}
