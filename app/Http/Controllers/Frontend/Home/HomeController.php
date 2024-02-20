<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'projects' => Project::get(),
            'testimonials' => Testimonial::get()
        ];
        return view('frontend.home.index', $data);
    }
}
