<?php

namespace App\Http\Controllers;

use App\Models\HigherEducation;
use Illuminate\Http\Request;

class HigherEducationController extends Controller
{
    public function index()
    {
        $data = [
            'higherEducation' => HigherEducation::get()->toQuery()->paginate(5),
        ];
        return view('admin.higher-educations.index', $data);
    }
    public function create()
    {
        return view('admin.higher-educations.create');
    }
    public function store(Request $request)
    {
        $higherEducation = HigherEducation::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);


        $data = [
            'higherEducation' => HigherEducation::get()->toQuery()->paginate(5),
        ];
        return view('admin.higher-educations.index', $data);
    }
    public function show(HigherEducation $higherEducation)
    {
        //
    }
    public function edit($id)
    {
        $higherEducation = HigherEducation::find($id);
        return view('admin.higher-educations.edit', compact('higherEducation'));
    }
    public function update(Request $request, HigherEducation $higherEducation)
    {
        $higherEducation->update([
            'title' => $request->title,
            'description' => $request->description,

        ]);

        return redirect()->route('higher-education.index');
    }
    public function destroy(HigherEducation $higherEducation)
    {
    }
}
