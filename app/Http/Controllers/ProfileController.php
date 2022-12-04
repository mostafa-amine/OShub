<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(Request $request , User $user = null)
    {

        if ($user)
        {
            return view('users.profile' , compact('user'));
        }

        if($request->user())
        {
            return redirect()->route('profile' , $request->user()->username());
        }

        abort(404);
    }
}
