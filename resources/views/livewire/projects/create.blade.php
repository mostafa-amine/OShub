<div class="container mt-5">
    <form wire:submit.prevent='createProject'>
        @csrf
        <div class="mb-2">
            <label for="title" class="form-label">Project Title</label>
            <input type="text" wire:model="title" class="form-control" name="title" id="title" value="{{ old('title') }}" required placeholder="Larablogs">
            @error('title') <span class="error" style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div class="mb-2">
            <label for="short" class="form-label">Short Description</label>
            <input type="text" wire:model="short" class="form-control" name="short" id="short" value="{{ old('short') }}" required placeholder="A simple laravel Blog ...">
            @error('short') <span class="error" style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div class="mb-2">
            <label for="short" class="form-label">Project URL</label>
            <input type="text" wire:model="url" class="form-control" name="url" id="url" value="{{ old('url') }}" required placeholder="www.larablogs.tech">
            @error('url') <span class="error" style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div class="mb-2">
            <label for="short" class="form-label">Repository URL</label>
            <input type="text" wire:model="repo" class="form-control" name="repo" id="repo" value="{{ old('repo') }}" required>
            @error('repo') <span class="error" style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div class="mb-2">
            <label for="short" class="form-label">Packagist URL</label>
            <input type="text" wire:model="packagist" class="form-control" name="packagist" value="{{ old('packagist') }}" id="packagist" required>
            @error('packagist') <span class="error" style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div class="mb-2">
            <label for="desc" class="form-label">Project Description</label>
            <textarea name="desc" wire:model="desc" id="desc" class="form-control" rows="5" required placeholder="This is a project that ...">{{ old('desc') }}</textarea>
            @error('desc') <span class="error" style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div class="mb-2">
            <button type="submit" class="btn btn-primary">
                Create
                <div class="spinner-border spinner-border-sm" wire:loading wire:target='createProject' role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </button>
        </div>

    </form>
</div>
