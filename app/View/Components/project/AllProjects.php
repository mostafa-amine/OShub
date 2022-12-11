<?php

namespace App\View\Components\project;

use Illuminate\View\Component;

class AllProjects extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $projects)
    {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project.all-projects');
    }
}
