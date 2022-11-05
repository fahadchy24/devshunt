<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(): Renderable
    {
        return view('backend.pages.index');
    }

    public function categories(): Renderable
    {
        return view('backend.pages.category.index');
    }
}
