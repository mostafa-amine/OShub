<?php

namespace App\Services;

use App\Models\Project;
use Illuminate\Support\Str;

class ProjectService
{
    public function StoreProject($request)
    {
        $project = Project::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title , '-'),
            'short_description' => $request->short,
            'project_url' => $request->url,
            'repo_url' => $request->repo,
            'packagist_url' => $request->packagist,
            'description' => $request->desc,
            'user_id' => $request->user()->id
        ]);
    }
}
