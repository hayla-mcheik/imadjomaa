<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
    public function home()
    {
        return Inertia::render('Frontend/Home');
    }


    public function services()
    {
        return Inertia::render('Frontend/Services');
    }
    public function galleryimages()
    {
return Inertia::render('Frontend/GalleryImages');
    }
    public function galleryvideos()
    {
return Inertia::render('Frontend/GalleryVideos');
    }

    public function appointment()
    {
        return Inertia::render('Frontend/Appointment');
    }



    public function about()
    {
        return Inertia::render('Frontend/About');
    }

    public function contact()
    {
        return Inertia::render('Frontend/Contact');
    }



}
