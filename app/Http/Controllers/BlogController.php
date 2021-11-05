<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class BlogController extends Controller
{


    public function index($id)
    {
        $blog = Blog::where('slug', $id)->first();
        return view('blog.index', compact('blog'));
    }

    public function create(Request $request)
    {
       $this->validate($request, [
            'title' => 'required|max:255|unique:blogs,title,except,id',
            'blog_text' => 'required',
        ]);

        $blog = [
            'user_id' => $request->user()->id,
            'slug' => Str::slug($request->title),
            'title' => $request->title,
            'blog_text' => $request->blog_text,
        ];

        Blog::create($blog);

        return back()->with('success', 'Blog created successfully');

    }

    public function userblogs(){
        $blogs = Blog::where('user_id', auth()->user()->id)->get();
        return view('blog.userblogs', compact('blogs'));
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $blog = Blog::findorfail($id);
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $id = Crypt::decrypt($id);
        $blog = Blog::findorfail($id);

        $this->validate($request, [
            'title' => 'required|max:255',
            'blog_text' => 'required',
        ]);

        $blog->update([
            'title' => $request->title,
            'blog_text' => $request->blog_text,
        ]);

        return back()->with('success', 'Blog updated successfully');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        $blog = Blog::findorfail($id);
        $blog->delete();
        return back()->with('success', 'Blog deleted successfully');
    }
}
