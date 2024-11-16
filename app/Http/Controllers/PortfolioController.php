<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $featured_projects = Project::where('is_featured', true)->latest()->take(3)->get();
        return view('pages.home', compact('featured_projects'));
    }

    public function about()
    {
        $skills = Skill::all();
        return view('pages.about', compact('skills'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}