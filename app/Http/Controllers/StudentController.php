<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseStudent;
use App\Models\User;

class StudentController extends Controller
{
    public function index()
    {
        $studentCourses = CourseStudent::all();
        $courses = Course::all();
        $students = User::where('user_group', '=', 3)->get();

        return view('students.index')->with([
            'students' => $students,
            'studentCourses' => $studentCourses,
            'courses' => $courses,
        ]);
    }
}
