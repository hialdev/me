<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LearnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('learns')->insert([
            [
                'title' => 'Introduction to Microservices Architecture',
                'slug' => Str::slug('Introduction to Microservices Architecture'),
                'excerpt' => 'Learn the fundamentals of microservices architecture and how it differs from monolithic design.',
                'keywords' => 'microservices, architecture, fundamentals',
                'image' => 'learns/microservices-introduction.jpg',
                'content' => '<p>Microservices architecture is a software development technique that structures an application as a collection of small, independent services. Each service is <strong>self-contained</strong> and communicates with others through well-defined APIs.</p><p>This approach offers significant advantages in terms of <em>scalability</em>, <strong>fault isolation</strong>, and <em>development speed</em>, especially in large applications.</p>',
                'created_at' => now(),
            ],
        ]);
    }
}
