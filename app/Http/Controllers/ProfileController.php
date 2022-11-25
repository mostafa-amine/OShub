<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Request $request , User $user = null)
    {

        if ($user)
        {
            $projects = $user->latestProjects();
            return view('users.profile' , compact('user' , 'projects'));
        }

        if($request->user())
        {
            return redirect()->route('profile' , $request->user()->username());
        }

        abort(404);
    }
}
