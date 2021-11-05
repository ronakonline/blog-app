<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('home')->with('blogs', $blogs);
    }
}
