<form wire:submit.prevent="UpdatePassword">
    <div class="mt-2">
        <label for="curPassword" class="form-label">Current Password</label>
        <input type="password" class="form-control" wire:model="curPassword" name="curPassword" id="curPassword">
        @error('curPassword') <span class="error" style="color: red;">{{ $message }}</span> @enderror
        <span class="" style="color: red;">{{ session('error') }}</span>
    </div>

    <div class="mt-2">
        <label for="newPassword" class="form-label">New Password</label>
        <input type="password" class="form-control" wire:model="newPassword" name="newPassword" id="newPassword">
        @error('newPassword') <span class="error" style="color: red;">{{ $message }}</span> @enderror
    </div>

    <div class="mt-2">
        <label for="confPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" wire:model="confPassword" name="confPassword" id="confPassword">
        @error('confPassword') <span class="error" style="color: red;">{{ $message }}</span> @enderror
    </div>

    <div class="mt-2">
        <button wire:click="UpdatePassword" type="submit" class="btn btn-danger">Update</button>
    </div>
</form>
