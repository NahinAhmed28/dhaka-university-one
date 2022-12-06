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
            'organizations' => Organization::get(['image']),
        ];

        return view('frontend.layouts.main', $data);
    }
    public function about()
    {
        $data = [
            'about' => About::first(),
        ];
        return view('frontend.layouts.about', $data);

    }
    public function service()
    {
        return view('frontend.layouts.service');

    }
    public function expertise()
    {
        return view('frontend.layouts.expertise');

    }
    public function mission()
    {
        return view('frontend.layouts.mission');

    }
    public function contact()
    {
        return view('frontend.layouts.contact');

    }
    public function higherEducation()
    {
        return view('frontend.layouts.higher-education');

    }
    public function internship()
    {
        return view('frontend.layouts.internship');

    }
    public function training()
    {
        return view('frontend.layouts.training');

    }
    public function fellowship()
    {
        return view('frontend.layouts.fellowship');

    }
    public function completedResearch()
    {
        return view('frontend.layouts.completed-research');

    }
    public function ongoingResearch()
    {
        return view('frontend.layouts.ongoing-research');

    }
    public function organization()
    {
        $data = [
            'organizations' => Organization::get(['image']),
        ];

        return view('frontend.layouts.organization',$data);

    }
    public function publication()
    {
        return view('frontend.layouts.publication');

    }
    public function gallery()
    {
        return view('frontend.layouts.gallery');

    }


}

