<?php

namespace App\Http\Controllers;

use App\Models\HigherEducation;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = 'higher-education' . time() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('assets/uploads/higher-education')) {
                mkdir('assets/uploads/higher-education', 0777, true);
            }
            $image->move('assets/uploads/higher-education', $imageFileName);
                        Image::make('assets/uploads/training/'.$imageFileName)->resize(150,150)->save('assets/uploads/training/'.$imageFileName);
        } else {
            $imageFileName = 'default_logo.png';
        }
        $higherEducation = HigherEducation::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageFileName,
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
        $imageFileName = $higherEducation->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = 'higher-education' . time() . '.' . $image->getClientOriginalExtension();


            if (!file_exists('assets/uploads/higher-education')) {
                mkdir('assets/uploads/higher-education', 0777, true);
            }

            //delete old image if exist
            if (file_exists('assets/uploads/higher-education/' . $higherEducation->image) and $higherEducation->image != 'default.png') {
                unlink('assets/uploads/higher-education/'.$higherEducation->image);
            }
            $image->move('assets/uploads/higher-education', $imageFileName);
        }
        $higherEducation->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageFileName,

        ]);

        return redirect()->route('higher-education.index');
    }
    public function destroy(HigherEducation $higherEducation)
    {
    }
}
