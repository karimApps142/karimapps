<?php

namespace App\Http\Controllers;

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
        return Inertia::render('Admin/Projects');
    }

    function settings()
    {
        return Inertia::render('Admin/Settings');
    }

    function createProject(Request $request)
    {
        $request->validate([
            'title' => "required",
            'framework' => "required",
            'image' => "required",
            'screens' => "required",
            'version' => "required",
            'note' => "required",
        ]);
    }
}
