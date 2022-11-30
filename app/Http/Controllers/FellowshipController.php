<?php

namespace App\Http\Controllers;

use App\Models\Fellowship;
use Illuminate\Http\Request;

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
        $fellowship = Fellowship::create([
            'title' => $request->title,
            'description' => $request->description,
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
        $fellowship->update([
            'title' => $request->title,
            'description' => $request->description,

        ]);

        return redirect()->route('fellowship.index');
    }
    public function destroy(Fellowship $fellowship)
    {
    }
}
