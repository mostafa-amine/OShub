<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Component
{
    public $userInfo;


    public $curPassword;
    public $newPassword;
    public $confPassword;

    public function UpdatePassword()
    {

        $this->validate([
            'curPassword' => 'required',
            'newPassword' => 'required',
            'confPassword' => 'same:newPassword'
        ]);

        if(Hash::check($this->curPassword , $this->userInfo->password))
        {
            $user = User::find($this->userInfo->id);
            $user->password = Hash::make($this->newPassword);
            $user->save();

            session()->flash('success' , 'Password change');
        }
        else
        {
            session()->flash('error' , 'Password does not match');
        }
    }
    public function render()
    {
        return view('livewire.profile.change-password');
    }
}
