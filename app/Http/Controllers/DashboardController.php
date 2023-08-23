<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;

class DashboardController extends Controller
{
    public function index()
    {
        $courses = Course::where('user_id', '=', Auth()->user()->id)->get();
        $modules = Module::where('user_id', '=', Auth()->user()->id)->get();

        return view('dashboard')->with([
            'courses' => $courses,
            'modules' => $modules,
        ]);
    }
}
