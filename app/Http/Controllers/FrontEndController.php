<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Organization;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $data = [
            'about' => About::first(),
            'organizations' => Organization::get(),
        ];

        return view('frontend.layouts.main', $data);
    }
    public function about()
    {
        return view('frontend.layouts.about');

    }
    public function service()
    {
        return view('frontend.layouts.about');

    }
    public function expertise()
    {
        return view('frontend.layouts.about');

    }
    public function mission()
    {
        return view('frontend.layouts.about');

    }
    public function contact()
    {
        return view('frontend.layouts.about');

    }
    public function higherEducation()
    {
        return view('frontend.layouts.about');

    }
    public function internship()
    {
        return view('frontend.layouts.about');

    }
    public function training()
    {
        return view('frontend.layouts.about');

    }
    public function fellowship()
    {
        return view('frontend.layouts.about');

    }
    public function completedResearch()
    {
        return view('frontend.layouts.about');

    }
    public function ongoingResearch()
    {
        return view('frontend.layouts.about');

    }
    public function organization()
    {
        return view('frontend.layouts.about');

    }
    public function publication()
    {
        return view('frontend.layouts.about');

    }


}

