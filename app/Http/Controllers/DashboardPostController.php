<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::oldest()->paginate(6)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'category' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'          => 'required|max:255',
            'slug'          => 'required|unique:posts',
            'image'         => 'image|file|max:4096',
            'category_id'   => 'required',
            'price'         => 'required',
            'qty'           => 'required'
        ]);

        if($request->file('images')){
            $validateData['image'] = $request->file('image')->store('post-image');
        }

        Post::create($validateData);
        return redirect('/dashboard/posts')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = ([
            'name'          => 'required|max:255',
            'category_id'   => 'required',
            'price'         => 'required',
            'qty'           => 'required'
        ]);

        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validateData = $request->validate($rules);
        Post::where('id', $post->id)->update($validateData);
        return redirect('/dashboard/posts')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Data berhasil dihapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
