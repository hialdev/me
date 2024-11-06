<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Learn;
use App\Models\Seo;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class ArticleController extends Controller
{
    public function index(){
        $seoData = Seo::all()->keyBy('page');

        // Fetch SEO for the 'article' page
        $seo = $seoData->get('article', (object)[
            'title' => 'My Articles',
            'description' => 'Let see my mission in this page, give me applause if you feel thats it useful',
            'image' => '',
            'keywords' => '',
        ]);

        $articles = Article::latest()->get();
        $count = (object)[
            'article' => Article::count(),
            'learn' => Learn::count(),
        ];
        return view('article.index', compact('seo', 'articles', 'count'));
    }

    public function show($slug){
        $article = Article::where('slug', $slug)->first();
        $seo = (object)[
            'title' => $article->title ?? '',
            'description' => $article->excerpt ?? '',
            'image' => $article->image ? Voyager::image($article->image) : '',
            'keywords' => $article->keywords ?? '',
        ];
        return view('article.show', compact('seo', 'article'));
    }
}
