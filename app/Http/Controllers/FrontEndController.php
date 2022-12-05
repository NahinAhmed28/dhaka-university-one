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


}

