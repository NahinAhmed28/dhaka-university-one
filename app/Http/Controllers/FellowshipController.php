<?php

namespace App\Http\Controllers;

use App\Models\Fellowship;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class FellowshipController extends Controller
{
    public function index()
    {
        $data = [
            'fellowships' => Fellowship::get()->toQuery()->paginate(5),
        ];
        return view('admin.fellowships.index', $data);
    }
    public function create()
    {
        return view('admin.fellowships.create');
    }
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = 'fellowship' . time() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('assets/uploads/fellowship')) {
                mkdir('assets/uploads/fellowship', 0777, true);
            }
            $image->move('assets/uploads/fellowship', $imageFileName);
                        Image::make('assets/uploads/fellowship/'.$imageFileName)->resize(150,150)->save('assets/uploads/fellowship/'.$imageFileName);
        } else {
            $imageFileName = 'default_logo.png';
        }
        $fellowship = Fellowship::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageFileName,
        ]);


        $data = [
            'fellowships' => Fellowship::get()->toQuery()->paginate(5),
        ];
        return view('admin.fellowships.index', $data);
    }
    public function show(Fellowship $internship)
    {
        //
    }
    public function edit($id)
    {
        $fellowship = Fellowship::find($id);
        return view('admin.fellowships.edit', compact('fellowship'));
    }
    public function update(Request $request, Fellowship $fellowship)
    {
        $imageFileName = $fellowship->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = 'fellowship' . time() . '.' . $image->getClientOriginalExtension();


            if (!file_exists('assets/uploads/fellowship')) {
                mkdir('assets/uploads/fellowship', 0777, true);
            }

            //delete old image if exist
            if (file_exists('assets/uploads/fellowship/' . $fellowship->image) and $fellowship->image != 'default.png') {
                unlink('assets/uploads/fellowship/'.$fellowship->image);
            }
            $image->move('assets/uploads/fellowship', $imageFileName);
            Image::make('assets/uploads/fellowship/'.$imageFileName)->resize(150,150)->save('assets/uploads/fellowship/'.$imageFileName);

        }
        $fellowship->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageFileName,

        ]);

        return redirect()->route('fellowship.index');
    }
    public function destroy(Fellowship $fellowship)
    {
    }
}
