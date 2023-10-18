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
        return view('admin.siteid', compact('site'));
    }

    /**
     * Display the specified resource.
     */
    public function store(Request $request, $id)
    {
        
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
    public function update(Request $request,SiteID $siteid)
   

    {
        $id = $request->id;
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'twitter' => '',
            'facebook' => '',
            'youtube' => '',
            'phone' => 'required',
            'phone2' => '',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
        ]);
        $data = $request->all();

        if($image = $request->file('image')) {
            $destinationPath = 'LogoImage';
            $LogoImage = date('YmdHis') . "." .$image->getClientOriginalExtension();
            $image->move($destinationPath, $LogoImage);
            $request->image = "$LogoImage";
         

}

$siteid = SiteID::findOrFail($id);




        $siteid ->update($data);

        return redirect()->back()->with('message','Form added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteID $siteID)
    {
        //
    }
}
