<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    public function create()
    {
        $courses = Course::where('user_id', '=', Auth::id())->get();

        return view('courses.create')->with([
            'courses' => $courses,
        ]);
    }

    public function store(Request $request)
    {
        $course = new Course();
        $course->title = $request->input('title');
        $course->short_description = $request->input('short_description');
        $course->price = $request->input('price');
        $course->image_url = $request->input('image_url');
        $course->user_id = auth()->user()->id;
        $course->save();

        return redirect('/dashboard');
    }

    public function edit(Request $request, $id)
    {
        $course = Course::find($id);

        return view('courses.edit')->with([
            'course' => $course,
        ]);
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->title = $request->input('title');
        $course->short_description = $request->input('short_description');
        $course->price = $request->input('price');
        $course->image_url = $request->input('image_url');
        $course->user_id = auth()->user()->id;
        $course->update();

        return redirect('/dashboard');
    }

    public function delete(Request $request)
    {
        $this->validate($request, [
            'course_id' => 'required|exists:courses,id',
        ]);

        $course = Course::find($request->course_id);
        $course->delete();

        return redirect('/dashboard');
    }
}
