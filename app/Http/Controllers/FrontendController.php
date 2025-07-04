<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
    public function home()
    {
        return Inertia::render('Frontend/Home', [
            'title' => 'Home'
        ]);
    }

    public function services()
    {
        return Inertia::render('Frontend/Services', [
            'title' => 'Our Services'
        ]);
    }

    public function projects()
    {
        return Inertia::render('Frontend/Projects', [
            'title' => 'Projects'
        ]);
    }
        public function projectdetails()
    {
        return Inertia::render('Frontend/ProjectsDetails', [
            'title' => 'Projects Details'
        ]);
    }


    
        public function newsdetails()
    {
        return Inertia::render('Frontend/BlogDetails', [
            'title' => 'Blog Details'
        ]);
    }
    

    public function events()
    {
        return Inertia::render('Frontend/Events', [
            'title' => 'Events'
        ]);
    }

    public function news()
    {
        return Inertia::render('Frontend/News', [
            'title' => 'News'
        ]);
    }

    public function about()
    {
        return Inertia::render('Frontend/About', [
            'title' => 'About Us'
        ]);
    }

    public function contact()
    {
        return Inertia::render('Frontend/Contact', [
            'title' => 'Contact Us'
        ]);
    }
}
