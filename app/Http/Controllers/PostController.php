<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $post = Post::latest()->filter(request(['search','category','author']))->get();

        return view('posts.index', ['posts'=>$post->load(['category','author'])]);
    }

    public function show(Post $post){
        return view('posts.show',['post'=>$post]);
    }
}
