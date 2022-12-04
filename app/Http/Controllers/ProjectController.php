<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Services\ProjectService;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreProject;
use Illuminate\Support\Facades\Gate;

class ProjectController extends Controller
{
    // define middleware
    public function __construct()
    {
        $this->middleware('auth')->only('create' , 'store' , 'edit' , 'update');
    }


    # Route Model Binding
    public function show(Project $project)
    {
        return view('projects.show' , compact('project'));
    }

    # Returns Create Project View
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Use StoreProject Request to validate the request
     * Use ProjectService to store the project on the database
    */
    public function store(StoreProject $request , ProjectService $project)
    {
        $project->StoreProject($request);
        return redirect()->route('home')->with('success' , 'Project Created Succefully');
    }


    public function edit($id)
    {

    }

    public function update(Request $request , Project $project)
    {
        if (! Gate::allows('update-post', $project)) {
            abort(403);
        }
    }

    public function destroy()
    {

    }

}
