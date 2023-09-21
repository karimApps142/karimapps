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

    function projectDetails(Project $project)
    {
        $project->load('images');

        return Inertia::render('Admin/ProjectDetail', ['project' => $project]);
    }

    function projectDelete(Project $project)
    {
        $project->delete();
        return to_route('projects');
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

        $project = Project::create([
            "title" => $request->title,
            "framework" => $request->framework,
            "screens" => $request->screens,
            "version" => $request->version,
            "note" => $request->note
        ]);

        if ($request->image) {
            $project->image = $request->file('image')->store('images', "public");
            $project->save();
        }

        $images = $request->images;

        if ($images) {
            foreach ($images as $image) {
                $path =   $image->store('images', "public");
                Image::create([
                    "project_id" => $project->id,
                    "path" => $path,
                ]);
            }
        }
    }

    function updateProject(Request $request, Project $project)
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

        $project->update([
            "title" => $request->title,
            "framework" => $request->framework,
            "screens" => $request->screens,
            "version" => $request->version,
            "note" => $request->note
        ]);

        if ($request->image && $request->image !== $project->image) {
            $project->image = $request->file('image')->store('images', "public");
            $project->save();
        }


        $images = $request->images;

        if ($images) {
            foreach ($images as $image) {
                $path =   $image->store('images', "public");
                Image::create([
                    "project_id" => $project->id,
                    "path" => $path,
                ]);
            }
        }
    }
}
