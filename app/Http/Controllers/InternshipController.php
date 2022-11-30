<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Illuminate\Http\Request;

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
        $internship = Internship::create([
            'title' => $request->title,
            'description' => $request->description,
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
        $internship->update([
            'title' => $request->title,
            'description' => $request->description,

        ]);

        return redirect()->route('internship.index');
    }
    public function destroy(Internship $internship)
    {
    }
}
