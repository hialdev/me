<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Seo;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class ProjectController extends Controller
{
    public function index(){
        $seoData = Seo::all()->keyBy('page');

        // Fetch SEO for the 'learn' page
        $seo = $seoData->get('project', (object)[
            'title' => 'My Project is My Case',
            'description' => 'Let see my mission in this page, give me applause if you feel thats it usefull',
            'image' => '',
            'keywords' => '',
        ]);

        $ctg = request()->query('category');
        $search = request()->query('search');
        $projects = Project::all();

        if($ctg){
            $category = Category::where('title', $ctg)->first();
            $projects = $category->projects;
        }
        
        if($search)
            $projects = Project::where('title', 'LIKE', '%'.$search.'%')->orWhere('excerpt', 'LIKE', '%'.$search.'%')->get();

        $categories = Category::withCount('projects')->get();
        return view('project.index', compact('seo', 'projects', 'categories'));
    }

    public function show($slug){
        $project = Project::where('slug', $slug)->first();
        $seo = (object)[
            'title' => $project->title,
            'description' => $project->excerpt,
            'image' => Voyager::image($project->image),
            'keywords' => $project->keywords,
        ];
        return view('project.show', compact('seo', 'project'));
    }
}
