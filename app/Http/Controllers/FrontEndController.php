<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
//        $data = [
//            'categories' => Category::get()->toQuery()->paginate(15),
//            'companies' => Company::get()->toQuery()->paginate(10),
//            'products' => Product::orderBy('id','asc')->paginate(10),
//        ];

//        return view('frontend.layouts.main', $data);
        return view('frontend.layouts.main');
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

