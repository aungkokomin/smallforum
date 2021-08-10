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
    $matter = YamlFrontMatter::parseFile(resource_path('posts/my-third-post.html'));
    dd($matter);
});

Route::get('/posts',function(){
    $posts = Post::with('category','author')->get();
    // ddd($posts->author);
    return view('post',['posts' => $posts]);
});

Route::get('/post/view',function(){
    return view('viewpost');
});

Route::get('/posts/{post:slug}',function(Post $post){
    return view('viewpost',['post'=>$post]);
});


Route::get('/category/{category:slug}',function(Category $category){
    return view('sub_post',['posts'=>$category->post->load(['category','author'])]);
});

Route::get('/author/{author:username}',function(User $author){
    return view('sub_post',['posts'=>$author->post->load(['category','author'])]);
});
