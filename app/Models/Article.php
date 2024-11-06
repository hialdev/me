<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Article extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['title', 'slug', 'excerpt', 'content', 'keywords'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'pivot_article_categories', 'article_id', 'category_id');
    }
}
