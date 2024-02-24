<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Testimonial;

class HomeController extends Controller
{
    protected $project, $testimonial;

    public function __construct(Project $project, Testimonial $testimonial)
    {
        $this->project = $project;
        $this->testimonial = $testimonial;
    }
    public function index()
    {
        $data = [
            'projects' => $this->project->active()->rank()->get(),
            'testimonials' => $this->testimonial->active()->rank()->get(),
        ];
        return view('frontend.home.index', $data);
    }
}
