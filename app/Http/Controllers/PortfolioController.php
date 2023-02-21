<?php

namespace App\Http\Controllers;


use App\Models\Gallery;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = [
            'portfolios' => Portfolio::get()->toQuery()->paginate(10),
        ];

        return view('admin.portfolios.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = 'portfolio' . time() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('assets/uploads/portfolio')) {
                mkdir('assets/uploads/portfolio', 0777, true);
            }
            $image->move('assets/uploads/portfolio', $imageFileName);
            Image::make('assets/uploads/portfolio/'.$imageFileName)->resize(640,1000)->save('assets/uploads/portfolio/'.$imageFileName);
        } else {
            $imageFileName = 'default_logo.png';
        }
        $portfolio = Portfolio::create([
            'category' => $request->category,
            'image' => $imageFileName,
        ]);


        $data = [
            'portfolios' => Portfolio::get()->toQuery()->paginate(5),
        ];
        Alert::success('Image Added', 'New Image Added Successfully');
        return view('admin.portfolios.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'category' => 'required',
        ]);

        $portfolioImageFileName = $portfolio->image;
        if ($request->hasFile('image')){
            $portfolioImage = $request->file('image');
            $portfolioImageFileName = 'portfolio'.time() . '.' . $portfolioImage->getClientOriginalExtension();


            if (!file_exists('assets/uploads/portfolio')){
                mkdir('assets/uploads/portfolio', 0777, true);
            }

            //delete old image if exist
            if (file_exists('assets/uploads/portfolio/'.$portfolio->image) and $portfolio->image != 'default.png'){
                unlink('assets/uploads/portfolio/'.$portfolio->image);
            }
            $portfolioImage->move('assets/uploads/portfolio', $portfolioImageFileName);
            Image::make('assets/uploads/portfolio/'.$portfolioImageFileName)->resize(640,1000)->save('assets/uploads/portfolio/'.$portfolioImageFileName);
        }

        $portfolio->update([
            'image' => $portfolioImageFileName,
            'category' => $request->category,

        ]);
        Alert::success('Image Updated', 'New Image Updated Successfully');
        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Gallery::destroy($id);
        return redirect()->back();
    }
}
