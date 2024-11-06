<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Project extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['title', 'slug', 'excerpt', 'emphatize', 'analyze', 'define', 'design', 'keywords'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'pivot_project_categories', 'project_id', 'category_id');
    }

    public function techs()
    {
        return $this->belongsToMany(Tech::class, 'pivot_project_techs', 'project_id', 'tech_id');
    }
}
