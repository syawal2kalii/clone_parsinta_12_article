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
        //cara 1
        // $article = new Article;
        // $article->title = request('title');
        // $article->slug = \Str::slug(request('title'))."-".\Str::random(10);
        // $article->content = request('content');
        // $article->save();
        // return back();
       
       //cara 2
        request()->validate([
            'title'=>'required',
            'content'=>'required'
        ]);

        Article::create([
            "title"=>request('title'),
            "slug"=>\Str::slug(request('title'))."-".\Str::random(10),
            "content"=>request('content')
        ]);

        return back();
    }
}
