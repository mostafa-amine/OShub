<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthoredProjects extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request , User $user)
    {
        // using mysql stored procedures
        // $user_projects = $user->UserProjects(Auth::id());

        // Using Eloquent ORM
        $projects = $request->user()->projects();
        return view('users.projects' , compact('projects'));
    }
}
