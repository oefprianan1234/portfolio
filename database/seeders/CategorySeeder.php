<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'description' => 'Full-stack web applications and websites',
                'icon' => 'fas fa-globe'
            ],
            [
                'name' => 'Mobile Development',
                'slug' => 'mobile-development',
                'description' => 'Mobile applications for iOS and Android',
                'icon' => 'fas fa-mobile-alt'
            ],
            [
                'name' => 'UI/UX Design',
                'slug' => 'uiux-design',
                'description' => 'User interface and experience design',
                'icon' => 'fas fa-paint-brush'
            ],
            [
                'name' => 'Backend Development',
                'slug' => 'backend-development',
                'description' => 'Server-side applications and APIs',
                'icon' => 'fas fa-server'
            ],
            [
                'name' => 'Frontend Development',
                'slug' => 'frontend-development',
                'description' => 'Client-side applications and interfaces',
                'icon' => 'fas fa-code'
            ],
            [
                'name' => 'DevOps',
                'slug' => 'devops',
                'description' => 'Deployment, automation, and infrastructure',
                'icon' => 'fas fa-network-wired'
            ],
            [
                'name' => 'Database Design',
                'slug' => 'database-design',
                'description' => 'Database architecture and optimization',
                'icon' => 'fas fa-database'
            ],
            [
                'name' => 'API Development',
                'slug' => 'api-development',
                'description' => 'RESTful and GraphQL APIs',
                'icon' => 'fas fa-plug'
            ],
            [
                'name' => 'Cloud Computing',
                'slug' => 'cloud-computing',
                'description' => 'Cloud-based solutions and services',
                'icon' => 'fas fa-cloud'
            ],
            [
                'name' => 'E-Commerce',
                'slug' => 'e-commerce',
                'description' => 'Online shopping and marketplace solutions',
                'icon' => 'fas fa-shopping-cart'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}