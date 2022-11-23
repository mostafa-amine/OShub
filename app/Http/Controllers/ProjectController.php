<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    // define middleware
    public function __construct()
    {
        $this->middleware('auth')->only('create' , 'store' , 'edit' , 'update');
    }
    public function index()
    {
        $articles = DB::table('projects')->get();
        return view('index' , ['articles' => $articles]);
    }

    public function show($slug)
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request)
    {

    }

    public function destroy()
    {

    }
    
}
