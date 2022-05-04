<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        return view('blog.index');
    }
    public function blogDetay($idBlog)
    {
        $data = ['blog' => Blog::findOrFail($idBlog)];
        return view('blog.detay', $data);
    }
}
