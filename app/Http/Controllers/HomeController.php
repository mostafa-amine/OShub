<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function show(Project $project)
    {
        $projects = $project->GetProjects();
        return view('home' , compact('projects'));
    }
}
