<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            // Artikel Umum Tentang Teknologi
            [
                'title' => 'The Future of Quantum Computing',
                'slug' => Str::slug('The Future of Quantum Computing'),
                'excerpt' => 'Quantum computing is set to revolutionize the tech industry in the coming decades.',
                'keywords' => 'quantum computing, technology, future',
                'image' => 'articles/quantum-computing.jpg',
                'content' => '<p>Quantum computing will change the world of computing by harnessing the unique properties of quantum mechanics. <strong>With the potential for unprecedented speed</strong>, quantum computers could solve problems that are impossible for classical computers.</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Role of AI in Modern Software Development',
                'slug' => Str::slug('The Role of AI in Modern Software Development'),
                'excerpt' => 'AI is transforming software development processes by automating tasks and improving efficiency.',
                'keywords' => 'AI, software development, automation',
                'image' => 'articles/ai-software-development.jpg',
                'content' => '<p>Artificial Intelligence is automating many tasks in software development, from <em>code generation</em> to <strong>testing</strong>, enabling faster and more accurate development processes.</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Why Startups Should Embrace Cloud Computing',
                'slug' => Str::slug('Why Startups Should Embrace Cloud Computing'),
                'excerpt' => 'Cloud computing offers startups scalability, cost savings, and flexibility.',
                'keywords' => 'cloud computing, startups, scalability',
                'image' => 'articles/cloud-computing.jpg',
                'content' => '<p>For startups, cloud computing provides <strong>scalable</strong> resources that can grow with their business, helping reduce upfront infrastructure costs and improve operational flexibility.</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Impact of 5G on the Internet of Things (IoT)',
                'slug' => Str::slug('The Impact of 5G on the Internet of Things (IoT)'),
                'excerpt' => '5G networks will supercharge IoT devices with faster speeds and lower latency.',
                'keywords' => '5G, IoT, technology',
                'image' => 'articles/5g-iot.jpg',
                'content' => '<p>The arrival of 5G is expected to <strong>boost IoT</strong> development by providing ultra-fast network speeds and low-latency communication for devices connected in real-time.</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Understanding Algorithmic Logic in Software Design',
                'slug' => Str::slug('Understanding Algorithmic Logic in Software Design'),
                'excerpt' => 'Algorithmic logic forms the foundation of software development, determining how data is processed.',
                'keywords' => 'algorithmic logic, software design, programming',
                'image' => 'articles/algorithmic-logic.jpg',
                'content' => '<p>Mastering <strong>algorithmic logic</strong> is crucial for developers, as it defines how data is processed, stored, and accessed in software applications. <em>Well-optimized algorithms</em> can significantly improve performance.</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Artikel Tutorial Ber-serial tentang Microservices
            [
                'title' => 'Microservices Architecture: Introduction - Part 1',
                'slug' => Str::slug('Microservices Architecture: Introduction - Part 1'),
                'excerpt' => 'An introduction to the microservices architecture and its benefits over monolithic systems.',
                'keywords' => 'microservices, architecture, introduction',
                'image' => 'articles/microservices-part1.jpg',
                'content' => '<p>Microservices architecture breaks down large systems into <strong>small, independent services</strong>. This allows for more flexibility and easier scaling of applications.</p><p>In this tutorial series, we will explore how to build microservices from scratch, starting with understanding the <em>basic principles of microservices architecture</em>.</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Building Your First Microservice - Part 2',
                'slug' => Str::slug('Building Your First Microservice - Part 2'),
                'excerpt' => 'In this part, we will build and deploy our first microservice with a REST API.',
                'keywords' => 'microservices, rest api, tutorial',
                'image' => 'articles/microservices-part2.jpg',
                'content' => '<p>We will start by building our first microservice using <strong>Node.js</strong> and Express, creating a simple <em>REST API</em> that handles user data.</p><p>Follow along as we implement each component, ensuring separation of concerns and service isolation.</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Communicating Between Microservices - Part 3',
                'slug' => Str::slug('Communicating Between Microservices - Part 3'),
                'excerpt' => 'Learn how microservices communicate with each other via API gateways and message brokers.',
                'keywords' => 'microservices, api gateway, message broker',
                'image' => 'articles/microservices-part3.jpg',
                'content' => '<p>In this section, we will explore <strong>communication strategies</strong> between microservices, including using <em>API gateways</em> and message brokers like <strong>RabbitMQ</strong> for asynchronous communication.</p><p>Efficient communication is key to ensuring smooth operation in a microservices architecture.</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
