<?php

namespace App\Http\Controllers;

use App\Models\Learn;
use App\Models\Seo;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class LearnController extends Controller
{
    public function index(){
        $seoData = Seo::all()->keyBy('page');

        // Fetch SEO for the 'learn' page
        $seo = $seoData->get('learn', (object)[
            'title' => 'Learn Series',
            'description' => 'Let see my mission in this page, give me applause if you feel thats it usefull',
            'image' => '',
            'keywords' => '',
        ]);
        $learns = Learn::all();
        return view('learn.index', compact('seo', 'learns'));
    }

    public function show($slug){
        $seoData = Seo::where('page', 'learn')->first();

        $learn = Learn::where('slug', $slug)->first();
        $seo = (object)[
            'title' => $learn->title ?? $seoData->title,
            'description' => $learn->excerpt ?? $seoData->exceprt,
            'image' => Voyager::image($learn->image ?? $seoData->image),
            'keywords' => $learn->keywords ?? $seoData->keywords,
        ];
        return view('learn.show', compact('seo', 'learn'));
    }
}
