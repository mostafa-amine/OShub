<div class="container mt-5 mb-5">


    <h3>Profile Info</h3>
    <hr>
    <form wire:submit.prevent='UpdateProfile'>
        <div class="mt-2">
            <label for="fname" class="form-label" >Full Name</label>
            <input type="text" class="form-control" wire:model="fname"  name="fname" id="fname">
            @error('fname') <span class="error" style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div class="mt-2">
            <label for="uname" class="form-label">User Name</label>
            <input type="text" class="form-control"  wire:model="uname" name="uname" id="uname">
            @error('uname') <span class="error" style="color: red;">{{ $message }}</span> @enderror

        </div>

        <div class="mt-2">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" wire:model="email" name="fname" id="email">
            @error('email') <span class="error" style="color: red;">{{ $message }}</span> @enderror

        </div>

        <div class="mt-2">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>

    <h3 class="mt-5">Change Password</h3>
    <hr>
    <div class="change_password">
        <livewire:profile.change-password :userInfo="$user"/>
    </div>



</div>
