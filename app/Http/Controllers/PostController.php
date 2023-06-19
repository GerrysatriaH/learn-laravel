<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "Product",
            "posts" => Post::all()
        ]);
    }

    public function show($id){
        return view('post', [
            "title" => "Detail Product",
            "posts" => Post::find($id)
        ]);
    }
}
