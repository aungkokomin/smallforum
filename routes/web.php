<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Symfony\Component\Translation\Dumper\YamlFileDumper;

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

Route::get('/', function () {
    $posts = Post::with('category','author')->get();
    // ddd($categories);
    return view('post',['posts' => $posts, 'categories' => Category::all()]);
})->name('home');

Route::get('/post/{post:slug}',function(Post $post){
    return view('viewpost',['post'=>$post]);
});


Route::get('/category/{category:slug}',function(Category $category){
    return view('post',['posts'=>$category->post->load(['category','author']) , 'categories' => Category::all()])->name('category');
});

Route::get('/author/{author:username}',function(User $author){
    return view('post',['posts'=>$author->post->load(['category','author']) , 'categories' => Category::all()])->name('author');
});
