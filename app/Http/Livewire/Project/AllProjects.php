<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Livewire\Component;

class AllProjects extends Component
{
    public $projects;

    public function test(Project $project)
    {
        $this->projects = $project->sortByOldest();
    }

    public function render()
    {
        return view('components.project.all-projects');
    }
}
