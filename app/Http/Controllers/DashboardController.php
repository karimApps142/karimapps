<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    function dashboard()
    {
        return Inertia::render('Admin/Dashboard');
    }

    function projects()
    {
        $projects = Project::all();

        return Inertia::render('Admin/Projects', ['projects' => $projects]);
    }

    function settings()
    {
        return Inertia::render('Admin/Settings');
    }

    function createProject(Request $request)
    {

        // make validations  
        $request->validate([
            'title' => "required|max:255",
            'framework' => "required",
            'image' => "nullable",
            'screens' => "required",
            'version' => "required",
            'note' => "required",
        ]);

        // saving data to database 

        $project = new Project;

        $project->title = $request->title;
        $project->framework = $request->framework;
        $project->screens = $request->screens;
        $project->version = $request->version;
        $project->note = $request->note;

        if ($request->image) {
            $project->image = $request->file('image')->store('images', "public");
        }

        $project->save();


        $images = $request->images;

        if ($images) {
            foreach ($images as $image) {
                $path =   $image->store('images', "public");
                $projectImage = new Image;
                $projectImage->project_id = $project->id;
                $projectImage->path = $path;
                $projectImage->save();
            }
        }
    }
}
