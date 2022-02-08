<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {

        //dd(request('search'));
        //$posts = Post::latest();

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' In ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
        }

        return view('post', [
            "title" => "All Post" . $title,
            "active" => 'post',
            // "post" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString() //withQueryString -> membawa query string sebelumnya
            //how to use eager load to fix problem N+1, add with(['t1','t2'])
        ]);
    }

    public function show(Post $post)
    {
        return view('posts', [
            "title" => "single post",
            "active" => 'post',
            "posts" => $post
        ]);
    }
}
