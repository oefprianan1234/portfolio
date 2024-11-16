<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'description' => 'A full-featured e-commerce solution built with Laravel and Vue.js',
                'technologies' => 'Laravel,Vue.js,MySQL,Tailwind CSS',
                'github_link' => 'https://github.com/username/ecommerce',
                'demo_link' => 'https://demo.example.com',
                'is_featured' => true,
                'category' => 'web-development'
            ],
            [
                'title' => 'Mobile Shopping App',
                'description' => 'A cross-platform mobile shopping application',
                'technologies' => 'React Native,Node.js,MongoDB',
                'github_link' => 'https://github.com/username/mobile-shop',
                'demo_link' => 'https://demo.example.com/mobile',
                'is_featured' => true,
                'category' => 'mobile-development'
            ],
            [
                'title' => 'Portfolio Website',
                'description' => 'A personal portfolio website built with modern technologies',
                'technologies' => 'React,Next.js,Tailwind CSS',
                'github_link' => 'https://github.com/username/portfolio',
                'demo_link' => 'https://demo.example.com/portfolio',
                'is_featured' => true,
                'category' => 'frontend-development'
            ],
            [
                'title' => 'REST API Service',
                'description' => 'A RESTful API service for managing business data',
                'technologies' => 'Laravel,MySQL,Docker',
                'github_link' => 'https://github.com/username/api-service',
                'demo_link' => 'https://api.example.com',
                'is_featured' => false,
                'category' => 'api-development'
            ],
            [
                'title' => 'Cloud Storage Solution',
                'description' => 'A cloud-based storage solution with advanced features',
                'technologies' => 'AWS,Node.js,React',
                'github_link' => 'https://github.com/username/cloud-storage',
                'demo_link' => 'https://storage.example.com',
                'is_featured' => false,
                'category' => 'cloud-computing'
            ]
        ];

        foreach ($projects as $projectData) {
            // สร้าง Project ด้วย category เป็น string ก่อน
            $project = Project::create([
                'title' => $projectData['title'],
                'description' => $projectData['description'],
                'technologies' => $projectData['technologies'],
                'github_link' => $projectData['github_link'],
                'demo_link' => $projectData['demo_link'],
                'is_featured' => $projectData['is_featured'],
                'category' => $projectData['category'] // เก็บค่า category เป็น string
            ]);

            // หา Category จาก slug และอัพเดท category_id
            $category = Category::where('slug', $projectData['category'])->first();
            if ($category) {
                $project->category_ids = $category->id;
                $project->save();
            }
        }
    }
}
