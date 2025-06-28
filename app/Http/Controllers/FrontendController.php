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

    public function galleryimages()
    {
        return Inertia::render('Frontend/GalleryImages', [
            'title' => 'Image Gallery'
        ]);
    }

    public function galleryvideos()
    {
        return Inertia::render('Frontend/GalleryVideos', [
            'title' => 'Video Gallery'
        ]);
    }

    public function appointment()
    {
        return Inertia::render('Frontend/Appointment', [
            'title' => 'Book Appointment'
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
