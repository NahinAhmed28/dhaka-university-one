<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'experts' => Expert::get()->toQuery()->paginate(5),
        ];
        return view('admin.experts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.experts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'message' => 'required',
        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = 'expert' . time() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('assets/uploads/expert')) {
                mkdir('assets/uploads/expert', 0777, true);
            }
            $image->move('assets/uploads/expert', $imageFileName);
            Image::make('assets/uploads/expert/'.$imageFileName)->resize(600,600)->save('assets/uploads/expert/'.$imageFileName);
        } else {
            $imageFileName = 'default_logo.png';
        }

//        dd($request->all());
        $expert = Expert::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'message' => $request->message,
            'image' => $imageFileName,
        ]);


        $data = [
            'experts' => Expert::get()->toQuery()->paginate(5),
        ];
        Alert::success('Expert info Added', 'Expert Info Added Successfully');
        return view('admin.experts.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function show(Expert $expert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $expert = Expert::find($id);
        return view('admin.experts.edit', compact('expert'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expert $expert)
    {
        $expertImageFileName = $expert->image;
        if ($request->hasFile('image')){
            $expertImage = $request->file('image');
            $expertImageFileName = 'expert'.time() . '.' . $expertImage->getClientOriginalExtension();


            if (!file_exists('assets/uploads/expert')){
                mkdir('assets/uploads/expert', 0777, true);
            }

            //delete old image if exist


            if (file_exists('assets/uploads/expert/'.$expert->image) and $expert->image != 'default.png'){
                unlink('assets/uploads/expert/'.$expert->image);
            }
            $expertImage->move('assets/uploads/expert', $expertImageFileName);
            Image::make('assets/uploads/expert/'.$expertImageFileName)->resize(600,600)->save('assets/uploads/expert/'.$expertImageFileName);
        }

        $expert->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'message' => $request->message,
            'image' => $expertImageFileName,

        ]);
        Alert::success('Expert info Updated', 'Expert Info Updated Successfully');
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Expert::destroy($id);
        return redirect()->back();
    }
}
