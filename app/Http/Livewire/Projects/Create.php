<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\Validated;

class Create extends Component
{
    public $title;
    public $short;
    public $url;
    public $repo;
    public $packagist;
    public $desc;

    protected $rules = [
            'title' => 'required',
            'short' => 'required',
            'url' => 'required|url',
            'repo' => 'required|url',
            'packagist' => 'required|url',
            'desc' => 'required',
    ];

    protected $messages = [

    ];
    public function createProject()
    {
        $this->validate();

        $project = Project::create([
            'title' => $this->title,
            'slug' => Str::slug($this->title , '-'),
            'short_description' => $this->short,
            'project_url' => $this->url,
            'repo_url' => $this->repo,
            'packagist_url' => $this->packagist,
            'description' => $this->desc,
            'user_id' => auth()->user()->id
        ]);
        session()->flash('created' , 'Project Added ✨');
        redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.projects.create');
    }
}
