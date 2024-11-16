<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'projects_count' => Project::count(),
            'skills_count' => Skill::count(),
            'recent_projects' => Project::latest()->take(5)->get(),
            'recent_skills' => Skill::latest()->take(5)->get(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}