<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\View\View;
class CourseController extends Controller
{
    public function index(): View
    {
        $allCourses = Course::all();
        debug($allCourses);
        return view('courses.index')->with('courses', $allCourses);
    }

    public function create(): View
    {
        return view('courses.create');
    }

    public function store(Request $request):RedirectResponse
    {
        Course::create($request->all());
        return redirect('/courses');
    }
}
