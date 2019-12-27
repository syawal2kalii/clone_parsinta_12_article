<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     public function store()
     {
         $article = new Article;
         $article->title = request('title');
         $article->slug = \Str::slug(request('title'));
         $article->content = request('contack');
     }
}
