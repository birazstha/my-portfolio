<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'projects' => Project::get()
        ];
        return view('frontend.home.index', $data);
    }
}
