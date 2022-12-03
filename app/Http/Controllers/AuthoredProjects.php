<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function __invoke(Request $request)
    {
        $projects = $request->user()->projects();
        return view('users.projects' , compact('projects'));
    }
}
