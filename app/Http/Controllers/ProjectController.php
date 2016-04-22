<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests;
use App\Http\Middleware\ProjectControl;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('ProjectControl', ['except' => [
            'index',
        ]]);
    }


    public function index(){
        // var_dump(Project::find(1));
        //$usertest = Project::where();
        //echo $usertest->users->first()->firstname;

        if(Auth::user()){
            $projects = Auth::user()->projects()->get();
            foreach($projects as $project){
                echo $project->name;
            }
        }

        return view('project/edit');

    }

    public function show(){
        return view('project/show');
    }

    public function home(){
        return view('project/show');
    }

    public function files(){
        return view('project/show');
    }

    public function edit(){
        return view('project/edit');
    }

    public function task(){
        return view('project/task');
    }


}
