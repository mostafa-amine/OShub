<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;

class UserProfile extends Component
{

    public $user;

    public $fname;
    public $uname;
    public $email;

    public function mount()
    {
        $this->fname = $this->user->name;
        $this->uname = $this->user->user_name;
        $this->email = $this->user->email;
    }

    public function UpdateProfile()
    {
        $this->validate([
            'fname' => 'required',
            'uname' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::find($this->user->id);
        $user->name = $this->fname;
        $user->user_name = Str::slug($this->uname , '-');
        $user->email = $this->email;
        $user->save();
    }


    public function render()
    {
        return view('livewire.profile.user-profile');
    }
}
