<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        return view('blog', ['posts' => $posts]);
    }
}
