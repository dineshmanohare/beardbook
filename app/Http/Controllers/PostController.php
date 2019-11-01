<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = \DB::table('post')->where('slug',$slug)->first();
        // dd($post);
        // // dd($post);
        // $post = Post::where('slug',$slug)->first();
        return view('post',[
            'post' => $post
        ]);
    }
}
