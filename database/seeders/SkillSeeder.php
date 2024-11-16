<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            [
                'name' => 'PHP',
                'percentage' => 90,
                'icon' => 'fab fa-php',
                'category' => 'Programming Languages'
            ],
            [
                'name' => 'JavaScript',
                'percentage' => 85,
                'icon' => 'fab fa-js',
                'category' => 'Programming Languages'
            ],

            // Frameworks
            [
                'name' => 'Laravel',
                'percentage' => 88,
                'icon' => 'fab fa-laravel',
                'category' => 'Frameworks'
            ],
            [
                'name' => 'Vue.js',
                'percentage' => 80,
                'icon' => 'fab fa-vuejs',
                'category' => 'Frameworks'
            ],
            [
                'name' => 'React',
                'percentage' => 75,
                'icon' => 'fab fa-react',
                'category' => 'Frameworks'
            ],

            // Databases
            [
                'name' => 'MySQL',
                'percentage' => 85,
                'icon' => 'fas fa-database',
                'category' => 'Databases'
            ],
            [
                'name' => 'PostgreSQL',
                'percentage' => 80,
                'icon' => 'fas fa-database',
                'category' => 'Databases'
            ],
            [
                'name' => 'Oracle',
                'percentage' => 75,
                'icon' => 'fas fa-database',
                'category' => 'Databases'
            ],
            [
                'name' => 'MongoDB',
                'percentage' => 70,
                'icon' => 'fas fa-database',
                'category' => 'Databases'
            ],

            // DevOps & Container Technologies
            [
                'name' => 'Docker',
                'percentage' => 85,
                'icon' => 'fab fa-docker',
                'category' => 'DevOps'
            ],
            [
                'name' => 'Docker Compose',
                'percentage' => 80,
                'icon' => 'fab fa-docker',
                'category' => 'DevOps'
            ],
            [
                'name' => 'Docker Swarm',
                'percentage' => 75,
                'icon' => 'fab fa-docker',
                'category' => 'DevOps'
            ],
            [
                'name' => 'Kubernetes',
                'percentage' => 70,
                'icon' => 'fas fa-dharmachakra',
                'category' => 'DevOps'
            ],

            // Version Control
            [
                'name' => 'Git',
                'percentage' => 90,
                'icon' => 'fab fa-git-alt',
                'category' => 'Version Control'
            ],
            [
                'name' => 'GitHub',
                'percentage' => 88,
                'icon' => 'fab fa-github',
                'category' => 'Version Control'
            ],

            // Cloud Platforms
            [
                'name' => 'AWS',
                'percentage' => 75,
                'icon' => 'fab fa-aws',
                'category' => 'Cloud'
            ],
            [
                'name' => 'Digital Ocean',
                'percentage' => 80,
                'icon' => 'fab fa-digital-ocean',
                'category' => 'Cloud'
            ],

            // Operating Systems
            [
                'name' => 'Linux',
                'percentage' => 85,
                'icon' => 'fab fa-linux',
                'category' => 'Operating Systems'
            ],
            [
                'name' => 'Ubuntu',
                'percentage' => 85,
                'icon' => 'fab fa-ubuntu',
                'category' => 'Operating Systems'
            ],

            // Additional Development Skills
            [
                'name' => 'REST API',
                'percentage' => 90,
                'icon' => 'fas fa-code',
                'category' => 'Development'
            ],
            [
                'name' => 'GraphQL',
                'percentage' => 75,
                'icon' => 'fas fa-project-diagram',
                'category' => 'Development'
            ]
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}