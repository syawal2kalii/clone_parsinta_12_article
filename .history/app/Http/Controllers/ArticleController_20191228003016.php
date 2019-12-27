<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article/create');
        
    }

    public function create()
    {
        dd("tes")
        $article = new Article;
        $article->title = request('title');
        $article->slug = \Str::slug(request('title'));
        $article->content = request('content');
        $article->save();
    }
}
