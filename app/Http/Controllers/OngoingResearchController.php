<?php

namespace App\Http\Controllers;

use App\Models\OngoingResearch;
use Illuminate\Http\Request;

class OngoingResearchController extends Controller
{
    public function index()
    {
        $data = [
            'rows' => OngoingResearch::get()->toQuery()->paginate(5),
        ];
        return view('admin.ongoing-researches.index', $data);
    }
    public function create()
    {
        return view('admin.ongoing-researches.create');
    }
    public function store(Request $request)
    {
        $data = OngoingResearch::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        $data = [
            'rows' => OngoingResearch::get()->toQuery()->paginate(5),
        ];
        return view('admin.ongoing-researches.index', $data);
    }
    public function show(OngoingResearch $data)
    {
        //
    }
    public function edit($id)
    {
        $data = OngoingResearch::find($id);
        return view('admin.ongoing-researches.edit', compact('data'));
    }
    public function update(Request $request, OngoingResearch $ongoingResearch)
    {
        $ongoingResearch->update([
            'title' => $request->title,
            'description' => $request->description,

        ]);

        return redirect()->route('ongoing-research.index');
    }
    public function destroy($id)
    {
        OngoingResearch::destroy($id);
        return redirect()->back();
    }
}
