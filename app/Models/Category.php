<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'pivot_project_categories', 'category_id', 'project_id');
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'pivot_article_categories', 'category_id', 'article_id');
    }
}
