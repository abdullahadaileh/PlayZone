<?php

namespace App\Http\Controllers;

use App\Models\sport_type;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class SportTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sports_type = sport_type::all();
        // dd($sports_type);
        return view('Dashboard.Sports.index')->with('sports_type', $sports_type);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $sports_type = sport_type::all();
        // return view('Dashboard.Sports.create')->with('sports_type', $sports_type);
            return view('Dashboard.Sports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create the initial sport_type entry without the image
        $sportType = sport_type::create([
            'sport_type' => $request->input('sport_type'),
        ]);
        
        $filename = NULL;
        $path = NULL;

        // Sport Type Image
        if ($request->hasFile('sport_image')) {
            $file = $request->file('sport_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'landing/img/';
            $file->move($path, $filename);
            
            sport_type::create([
                'sport_type' => $request->sport_type,
                'sport_image' => $path.$filename,
            ]);
        }
        return redirect()->route('sport-types.index')->with('success', 'Sport Type created successfully.');
        // return redirect()->route('sport-types.index')->with('success', 'Sport Type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(sport_type $sport_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sport_type= sport_type::findorFail($id);
        return view('Dashboard.Sports.edit')->with('sport_type', $sport_type);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Find the existing sport_type record
    $sportType = sport_type::findOrFail($id);

    // Update sport_type without image
    $sportType->update([
        'sport_type' => $request->input('sport_type'),
    ]);

    // Initialize filename and path
    $filename = NULL;
    $path = NULL;

    // Check if a new image file is uploaded
    if ($request->hasFile('sport_image')) {
        // Remove the old image if it exists
        if ($sportType->sport_image && file_exists(public_path($sportType->sport_image))) {
            unlink(public_path($sportType->sport_image));
        }

        // Upload the new image
        $file = $request->file('sport_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $path = 'landing/img/';
        $file->move(public_path($path), $filename);

        // Update the record with the new image path
        $sportType->sport_image = $path . $filename;
    }

    // Save the updated record
    $sportType->save();

    // Redirect with success message
    return redirect()->route('sport-types.index')->with('success', 'Sport Type updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $product->delete();
        sport_type::findorFail($id)->delete(); 
        // return redirect()->route('sport-types.index');
        return redirect()->back()->with('success', 'Sport Type Deleted successfully.');
    }
}
