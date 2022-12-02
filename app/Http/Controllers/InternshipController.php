<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class InternshipController extends Controller
{
    public function index()
    {
        $data = [
            'internships' => Internship::get()->toQuery()->paginate(5),
        ];
        return view('admin.internships.index', $data);
    }
    public function create()
    {
        return view('admin.internships.create');
    }
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = 'internship' . time() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('assets/uploads/internship')) {
                mkdir('assets/uploads/internship', 0777, true);
            }
            $image->move('assets/uploads/internship', $imageFileName);
                        Image::make('assets/uploads/training/'.$imageFileName)->resize(150,150)->save('assets/uploads/training/'.$imageFileName);
        } else {
            $imageFileName = 'default_logo.png';
        }

        $internship = Internship::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageFileName,
        ]);


        $data = [
            'internships' => Internship::get()->toQuery()->paginate(5),
        ];
        return view('admin.internships.index', $data);
    }
    public function show(Internship $internship)
    {
        //
    }
    public function edit($id)
    {
        $internship = Internship::find($id);
        return view('admin.internships.edit', compact('internship'));
    }
    public function update(Request $request, Internship $internship)
    {
        $imageFileName = $internship->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = 'internship' . time() . '.' . $image->getClientOriginalExtension();


            if (!file_exists('assets/uploads/internship')) {
                mkdir('assets/uploads/internship', 0777, true);
            }

            //delete old image if exist
            if (file_exists('assets/uploads/internship/' . $internship->image) and $internship->image != 'default.png') {
                unlink('assets/uploads/internship/'.$internship->image);
            }
            $image->move('assets/uploads/internship', $imageFileName);
        }
        $internship->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageFileName,

        ]);

        return redirect()->route('internship.index');
    }
    public function destroy(Internship $internship)
    {
    }
}
