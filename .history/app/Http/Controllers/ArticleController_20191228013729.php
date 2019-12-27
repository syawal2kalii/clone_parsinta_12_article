<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article/create');
        
    }

    public function create()
    {
        
        // $article = new Article;
        // $article->title = request('title');
        // $article->slug = \Str::slug(request('title'));
        // $article->content = request('content');
        // $article->save();
        // return back();
        Article::create([
            "title"=>request('title'),
            "slug"=>\Str::slug(request('title')),
            "content"=>request(content)
        ]
        );
    }
}
