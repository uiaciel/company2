<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        //
    }

    public function show($slug)
    {
        $slug = Post::where('slug', $slug)->first();

        return view('post', [
            'post' => $slug
        ]);
    }
}
