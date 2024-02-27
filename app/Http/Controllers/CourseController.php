<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return response()->json($courses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request -> validate([
        'title' => 'required|max:100',
        'description' => 'required',
        'url' => 'nullable|url',
        'student_count'=>'required|integer|min:0',
        ]);
        $course = Course::create($validatedData);
        return response()->json ($course, 201);
    }

}