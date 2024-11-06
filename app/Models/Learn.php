<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Learn extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['title', 'slug', 'excerpt', 'content', 'keywords'];

    public function articles(){
        return $this->belongsToMany(Article::class, 'pivot_learn_articles', 'learn_id', 'article_id', 'id', 'id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'pivot_learn_categories', 'learn_id', 'category_id', 'id', 'id');
    }
}
