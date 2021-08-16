<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $post = Post::latest()->filter(request(['search']))->get();
        return view('post',['posts'=>$post->load(['category','author']) , 'categories'=>Category::latest()] );
    }

    public function show(Post $post){
        return view('viewpost',['post'=>$post]);
    }
}
