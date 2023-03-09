<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    function home()
    {
        return Inertia::render('Home');
    }

    function details()
    {
        return Inertia::render('Detail');
    }
}
