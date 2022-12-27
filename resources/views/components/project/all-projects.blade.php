<div class="mt-5 container">

    <div class="latest container" id="latest">

        <div class="filter d-flex justify-content-between">
            {{-- Search option --}}
            <div class="search col-5 d-flex justify-content-center border border-0">
                <input type="text" class="form-control rounded-0" placeholder="search for projects ...">
                <button class="btn btn-primary border-0 rounded-0">Search</button>
            </div>

            {{-- Filter option --}}
            <div class="filter-by">
                <button class="btn btn-secondary border-0 rounded-0">Recent</button>
                <button class="btn btn-secondary border-0 rounded-0">Popular</button>
            </div>
        </div>
        @foreach ($projects as $project)

        <a href="#" class="text-black text-decoration-none">
            <div class="latest-projects mt-5 border rounded p-3 shadow-sm p-3 mb-5 bg-body rounded">
                <div class="">
                    <div class="project">
                        <div class="project-title d-flex">
                            <h5>{{ $project->title }}<i class="bi bi-box-arrow-in-up-right"></i></h5>
                            <a href="#" class="text-black ms-3">{{ $project->user->user_name }}</a>
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="project-desc col-10">
                                <p>{{ $project->short_description }}</p>
                            </div>

                            <div class="project-user-info">

                            </div>
                        </div>

                        <div class="project-tags d-flex">
                            <button class="btn btn-primary me-2 border-0 fs-7 p-1">Laravel</button>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        {{-- @can('update-project', $project)
                <a href=""><button class="btn btn-primary">Update</button></a>
                <a href=""><button class="btn btn-danger">Delete</button></a>
        @endcan --}}

        @endforeach
    </div>

</div>
