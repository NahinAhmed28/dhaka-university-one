<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\CompletedResearch;
use App\Models\Contact;
use App\Models\Expertise;
use App\Models\Fellowship;
use App\Models\Gallery;
use App\Models\HigherEducation;
use App\Models\Internship;
use App\Models\Mission;
use App\Models\OngoingResearch;
use App\Models\Organization;
use App\Models\Plan;
use App\Models\Publication;
use App\Models\Service;
use App\Models\Training;
use App\Models\Vision;
use Illuminate\Http\Request;


class FrontEndController extends Controller
{
    public function index()
    {
        $data = [
            'about' => About::first(),
            'organizations' => Organization::get(['image']),
            'services' => Service::get(),
        ];

        return view('frontend.layouts.main', $data);
    }
    public function about()
    {
        $data = [
            'about' => About::first(),
            'mission' => Mission::first(),
            'vision' => Vision::first(),
            'plan' => Plan::first(),
        ];

        return view('frontend.layouts.about', $data);
    }
    public function service()
    {
        $data = [
            'services' => Service::get(),
        ];
        return view('frontend.layouts.service', $data);
    }
    public function expertise()
    {
        $data = [
            'expertises' => Expertise::get(),
        ];
        return view('frontend.layouts.expertise', $data);
    }
    public function mission()
    {
        $data = [
            'mission' => Mission::first(),
            'vision' => Vision::first(),
            'plan' => Plan::first()
        ];
        return view('frontend.layouts.mission', $data);
    }
    public function contact()
    {
        $data = [
            'contact' => Contact::get(),
        ];
        return view('frontend.layouts.contact', $data);
    }
    public function higherEducation()
    {
        $data = [
            'contact' => HigherEducation::get(),
        ];
        return view('frontend.layouts.higher-education', $data);
    }
    public function internship()
    {
        $data = [
            'internships' => Internship::get(),
        ];
        return view('frontend.layouts.internship', $data);
    }
    public function training()
    {
        $data = [
            'trainings' => Training::get(),
        ];
        return view('frontend.layouts.training', $data);
    }
    public function fellowship()
    {
        $data = [
            'internships' => Fellowship::get(),
        ];
        return view('frontend.layouts.fellowship', $data);
    }
    public function completedResearch()
    {
        $data = [
            'internships' => CompletedResearch::get(),
        ];
        return view('frontend.layouts.completed-research', $data);
    }
    public function ongoingResearch()
    {
        $data = [
            'internships' => OngoingResearch::get(),
        ];
        return view('frontend.layouts.ongoing-research', $data);
    }
    public function organization()
    {
        $data = [
            'organizations' => Organization::get(['image']),
        ];

        return view('frontend.layouts.organization', $data);
    }
    public function publication()
    {
        $data = [
            'internships' => Publication::get(),
        ];
        return view('frontend.layouts.publication', $data);
    }
    public function gallery()
    {
        $data = [
            'gallerys' => Gallery::get(),
        ];
        return view('frontend.layouts.gallery', $data);
    }
}
