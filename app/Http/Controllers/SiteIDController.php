<?php

namespace App\Http\Controllers;

use App\Models\SiteID;
use Illuminate\Http\Request;

class SiteIDController extends Controller
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
    public function show(Request $request)
    {
        //
        $site = siteID::all();
        return view('admin.siteid',compact('site'));

        
    }

    /**
     * Display the specified resource.
     */
    public function store(Request $request,$id)
    
    
    {
       
        if (
            $request->input('name')!=null||$request->input('phone')!=null||$request->input('phone2')!=null
            ||$request->input('email')!=null||$request->input('facebook')!=null
            ||$request->input('twitter')!=null||$request->input('youtube')!=null
            ||$request->input('instagram')!=null||$request->input('image')!=null
        ){
    $siteID = SiteID::findOrFail($id);
    $siteID->name = $request->input('name');
    $siteID->phone = $request->input('phone');
    $siteID->phone2 = $request->input('phone2');
    $siteID->email = $request->input('email');
    $siteID->facebook = $request->input('facebook');
    $siteID->twitter = $request->input('twitter');
    $siteID->youtube = $request->input('youtube');
    $siteID->instagram = $request->input('instagram');
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images');
        $siteID->image_path = $imagePath;
    }


    $siteID->save();
}
    return redirect()->back()->with('success', 'Data has been inserted successfully.');
}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteID $siteID)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //

        // $siteID = SiteID::findOrFail($id);


        {
            if (
                $request->input('name')!=null||$request->input('phone')!=null||$request->input('phone2')!=null
                ||$request->input('email')!=null||$request->input('facebook')!=null
                ||$request->input('twitter')!=null||$request->input('youtube')!=null
                ||$request->input('instagram')!=null||$request->input('image')!=null
            ){
        $siteID = new siteID;
        $siteID->name = $request->input('name');
        $siteID->phone = $request->input('phone');
        $siteID->phone2 = $request->input('phone2');
        $siteID->email = $request->input('email');
        $siteID->facebook = $request->input('facebook');
        $siteID->twitter = $request->input('twitter');
        $siteID->youtube = $request->input('youtube');
        $siteID->instagram = $request->input('instagram');
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images');
            $siteID->image_path = $imagePath;
        }
    
    
        $siteID->save();
    }
        return redirect()->back()->with('success', 'Data has been inserted successfully.');
    }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteID $siteID)
    {
        //
    }
}
