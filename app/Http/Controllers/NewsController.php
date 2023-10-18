<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'newsDate' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
        ]);

        if($image = $request->file('image')) {
            $destinationPath = 'NewsImage';
            $NewsImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $NewsImage);
            $request->image = "$NewsImage";

}


        $news = new News();
        $news->title     = $request->title;
        $news->description    = $request->description;
        $news->image     = $request->image;
        $news->newsDate =$request->newsDate;
        $news ->save();

        return redirect()->back()->with('message','news added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
