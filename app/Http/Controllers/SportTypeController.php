<?php

namespace App\Http\Controllers;

use App\Models\sport_type;
use Illuminate\Http\Request;

class SportTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sports_type = sport_type::all();
        return view('Dashboard.Sports.index')->with('sports_type', $sports_type);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sports_type = sport_type::all();
        return view('Dashboard.Sports.create')->with('sports_type', $sports_type);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        sport_type::create([
            'sport_type' => $request->input('sport_type'),
            'sport_image' => $request->input('sport_image'),
        ]);

        return redirect()->route('sport-types.index')->with('success', 'Product created successfully.');
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
    public function update(Request $request, sport_type $sport_type, $id)
    {
        $sport_type = sport_type::findorFail($id);
        $sport_type->update([
            "sport_type" => $request->sport_type,
            "sport_image" => $request->sport_image,
        ]);
        return redirect()->route('sport_type.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sport_type $sport_type)
    {
        //
    }
}
