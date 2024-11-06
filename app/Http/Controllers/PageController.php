<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Learn;
use App\Models\Project;
use App\Models\Seo;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $seoData = Seo::all()->keyBy('page');

        // Fetch SEO for the 'article' page
        $seo = $seoData->get('home', (object)[
            'title' => 'A Person Who Love Software Development, Web Design, UI / UX, and Data Analyst - Muhammad Nur Alif',
            'description' => 'Muhammad Nur Alif is person who love IT to the bone, if handle a project he act like Detective on mission.',
            'image' => '',
            'keywords' => '',
        ]);
        
        $articles = Article::latest()->limit(3)->get();
        $learns = Learn::latest()->limit(2)->get();
        $projects = Project::latest()->limit(5)->get();
        return view('pages.home', compact('seo', 'articles', 'projects', 'learns'));
    }
}
