<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Project $project)
    {
        $projects = $project->GetProjects();

        // Here we return a collection of objects 👍
        return ProjectResource::collection($projects);
    }

    // Route Model Binding ✨
    public function show(Project $project)
    {
        // Here We Return one object 🤷‍♂️
        return new ProjectResource($project);
    }
}
