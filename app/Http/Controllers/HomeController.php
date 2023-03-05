<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    function home()
    {
        return Inertia::render('Home');
    }
}
