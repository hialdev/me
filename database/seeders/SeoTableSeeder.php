<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SeoTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('seos')->insert([
            [
                'page' => 'home',
                'title' => 'Muhammad Nur Alif - Web Developer, UI/UX Designer, Data Analyst, System Analyst',
                'image' => 'path/to/home-image.jpg',
                'description' => 'Welcome to the portfolio of Muhammad Nur Alif, a skilled Web Developer, UI/UX Designer, Data Analyst, and System Analyst.',
                'keywords' => 'Muhammad Nur Alif, Web Developer, UI/UX Designer, Data Analyst, System Analyst, Portfolio',
                'created_at' => now(),
            ],
            [
                'page' => 'project',
                'title' => 'Projects by Muhammad Nur Alif - Web Development, UI/UX Design, Data Analysis',
                'image' => 'path/to/project-image.jpg',
                'description' => 'Explore the portfolio projects by Muhammad Nur Alif, showcasing expertise in web development, UI/UX design, and data analysis.',
                'keywords' => 'projects, portfolio, web development, UI/UX design, data analysis, Muhammad Nur Alif',
                'created_at' => now(),
            ],
            [
                'page' => 'article',
                'title' => 'Articles by Muhammad Nur Alif - Web Development, UI/UX Design, Technology Insights',
                'image' => 'path/to/article-image.jpg',
                'description' => 'Read insightful articles by Muhammad Nur Alif on web development, UI/UX design, technology trends, and best practices.',
                'keywords' => 'articles, blog, web development, UI/UX design, technology, Muhammad Nur Alif',
                'created_at' => now(),
            ],
            [
                'page' => 'learn',
                'title' => 'Learn with Muhammad Nur Alif - Tutorials on Microservices and Web Development',
                'image' => 'path/to/learn-image.jpg',
                'description' => 'Enhance your skills with tutorials and lessons by Muhammad Nur Alif on microservices, web development, and programming.',
                'keywords' => 'learn, tutorials, microservices, web development, programming, Muhammad Nur Alif',
                'created_at' => now(),
            ]
        ]);
    }
}
