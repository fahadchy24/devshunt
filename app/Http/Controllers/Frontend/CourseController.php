<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;

class CourseController extends Controller
{
    public function index(): Renderable
    {
        return view('courses.index');
    }

    public function show(): Renderable
    {
        return view('courses.show');
    }
}
