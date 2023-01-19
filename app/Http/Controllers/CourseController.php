<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
      return Inertia::render('Courses/Index', [
        "courses" => Course::withCount('episodes')->latest()->take(10)->get()
      ]);
    }

    public function show(int $id)
    {
      return Inertia::render("Courses/Show", [
        'course' => Course::whereId($id)->with('episodes')->first()
      ]);
    }
}
