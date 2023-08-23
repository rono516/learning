<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseStudent;
use App\Models\Module;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function root()
    {
        $courses = Course::orderBy('created_at', 'desc')->take(3)->get();
        $coursesStudent = CourseStudent::orderBy('created_at', 'desc')->take(3)->where('user_id', '=', Auth::id())->get();

        return view('welcome')->with([
            'courses' => $courses,
            'coursesStudent' => $coursesStudent,
        ]);
    }

    public function start($id)
    {
        $course = Course::find($id);

        $courseStudent = new CourseStudent();
        $courseStudent->course_id = $course->id;
        $courseStudent->user_id = Auth::id();
        $courseStudent->save();

        return redirect('/my_courses');
    }

    public function my_courses()
    {
        $done_modules = DB::table('progress_student')->get();
        $coursesStudent = CourseStudent::where('user_id', '=', Auth::id())->get();
        // $my_courses = Course::where('id', '=', $coursesStudent->course_id)->get();
        return view('courses.my_courses')->with([
            'coursesStudent' => $coursesStudent,
            'done_modules' => $done_modules,
            // 'my_courses' => $my_courses
        ]);
    }

    public function all_courses()
    {
        $courses = Course::all();

        return view('all_courses')->with([
            'courses' => $courses,
        ]);
    }

    public function course_detail($id)
    {
        $course = Course::find($id);
        $modules = Module::where('course_id', '=', $course->id)->get();

        return view('courses.course_detail')->with([
            'course' => $course,
            'modules' => $modules,
        ]);
    }

    public function module_view($id)
    {
        $module = Module::find($id);
        $course = Course::where('id', '=', $module->course_id)->first();
        if (Auth::check()) {
            $module->students()->attach(Auth::id());
        }

        return view('modules.index')->with([
            'module' => $module,
            'course' => $course,
        ]);
    }
}
