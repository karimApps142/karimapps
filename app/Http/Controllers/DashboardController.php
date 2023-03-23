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
}
