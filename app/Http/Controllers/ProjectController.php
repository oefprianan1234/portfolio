<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Category;
class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('category')->latest()->get();
        $categories = Category::all();

        return view('pages.projects.index', compact('projects', 'categories'));
    }

    public function show(Project $project)
    {
        $relatedProjects = Project::where('category_id', $project->category_id)
            ->where('id', '!=', $project->id)
            ->take(3)
            ->get();

        return view('pages.projects.show', compact('project', 'relatedProjects'));
    }

}