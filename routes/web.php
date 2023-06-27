<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Category;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('about', [AboutController::class, 'index']);
Route::get('product', [PostController::class, 'index']);
Route::get('product/{post:slug}', [PostController::class, 'show']);
Route::get('categories', function(){
    return view('categories', [
        'title' => 'Categories',
        'categories' => Category::all()
    ]);
});
Route::get('categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "List Product by Category : $category->name",
        'posts' => $category->posts->load('category')
    ]);
});