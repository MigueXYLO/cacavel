<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\View\View;
class CourseController extends Controller
{
    public function index(): View
    {
        $allCourses = Course::all();
        return view('courses.index')->with('courses', $allCourses);
    }
}
