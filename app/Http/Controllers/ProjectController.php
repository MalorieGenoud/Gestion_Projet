<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests;

class ProjectController extends Controller
{
    //

    public function index(){
        Project::all();
        return view('project/edit');

    }

    public function show(){
        return view('project/show');
    }

    public function edit(){
        return view('project/edit');
    }

    public function task(){
        return view('project/task');
    }


}
