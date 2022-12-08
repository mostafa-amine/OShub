<div class="mt-5 container">

    <button wire:click="test" class="btn btn-primary">Sort</button>
    <div class="row d-flex justify-content-between">
        @foreach ($projects as $project)
        <div class="card mt-3" style="width: 23rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $project->title }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $project->short_description }}</h6>
              <p class="card-text">{{ $project->description }}</p>
              <a href="{{ route('projects.show' , ['project' => $project->slug]) }}" class="card-link">Read More</a>
              <span>Writted by {{ $project->user->user_name }}</span>
              @can('update-project', $project)
                <a href=""><button class="btn btn-primary">Update</button></a>
                <a href=""><button class="btn btn-danger">Delete</button></a>
              @endcan
            </div>
        </div>
        @endforeach
    </div>
    {{-- {{ $projects->links() }} --}}

</div>
