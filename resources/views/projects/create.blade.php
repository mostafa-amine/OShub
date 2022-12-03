<x-layouts.app title="Submit Project">
    <x-slot:content>
        <div class="container mt-5">
            <form action="{{ route('projects.store') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="title" class="form-label">Project Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" required placeholder="Larablogs">
                </div>

                <div class="mb-2">
                    <label for="short" class="form-label">Short Description</label>
                    <input type="text" class="form-control" name="short" id="short" value="{{ old('short') }}" required placeholder="A simple laravel Blog ...">
                </div>

                <div class="mb-2">
                    <label for="short" class="form-label">Project URL</label>
                    <input type="text" class="form-control" name="url" id="url" value="{{ old('url') }}" required placeholder="www.larablogs.tech">
                </div>

                <div class="mb-2">
                    <label for="short" class="form-label">Repository URL</label>
                    <input type="text" class="form-control" name="repo" id="repo" value="{{ old('repo') }}" required>
                </div>

                <div class="mb-2">
                    <label for="short" class="form-label">Packagist URL</label>
                    <input type="text" class="form-control" name="packagist" value="{{ old('packagist') }}" id="packagist" required>
                </div>

                <div class="mb-2">
                    <label for="desc" class="form-label">Project Description</label>
                    <textarea name="desc" id="desc" class="form-control" rows="5" required placeholder="This is a project that ...">{{ old('desc') }}</textarea>
                </div>

                <div class="mb-2">
                    <input type="submit" value="Submit Project" class="btn btn-primary">
                </div>

            </form>
        </div>
    </x-slot:content>
</x-layouts.app>
