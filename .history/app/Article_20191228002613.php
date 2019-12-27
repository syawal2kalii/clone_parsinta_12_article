<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function index()
    {
        
    }
     public function create()
     {
         $article = new Article;
         $article->title = request('title');
         $article->slug = \Str::slug(request('title'));
         $article->content = request('content');
         $article->save();
     }
}
