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
//        return view('frontend.layouts.main');
    }

    public function searchData (Request $request)
    {
//        dd($request->all());

        $expireStartDate =  $request->expire_start;
        $expireEndDate = $request->expire_end;
        $priceStart = $request->price_start;
        $priceEnd = $request->price_end;

        $data = [
            'categories' => Category::get()->toQuery()->paginate(15),
            'companies' => Company::get()->toQuery()->paginate(10),
            'products' =>Product::whereBetween('expire_date', [$expireStartDate, $expireEndDate])
                ->whereBetween('price', [$priceStart, $priceEnd])
                ->orderBy('id','asc')->paginate(10)
        ];


//dd($data);

        return view('frontend.layouts.main', $data);

    }
}

