<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "List Product",
            "posts" => Post::with(['category'])->get()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "Detail Product",
            "post" => $post
        ]);
    }
}
