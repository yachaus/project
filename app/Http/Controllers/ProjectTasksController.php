<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Project $project){
        $attributes = request()->validate([
                'description' => 'required|min:3'
            ]);
        $project->addTask($attributes);

        return back();
    }
}
