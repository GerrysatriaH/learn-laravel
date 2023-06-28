<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $title='';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in Category '.$category->name;
        }

        return view('posts', [
            'title' => 'List Product'.$title,
            'active' => 'product',
            'posts' => Post::oldest()->filter(request(['search', 'category']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Detail Product',
            'active' => 'product',
            'post' => $post
        ]);
    }
}
