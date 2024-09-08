<?php

namespace App\Http\Controllers;

use App\Models\Field;
use App\Models\Field_images;
use App\Models\Field_type;
use App\Models\sport_type;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fields=Field::all();
    return view('Dashboard.fields.index',['fields'=>$fields]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
 
    $sports = Sport_type::all(); 
    $fields = Field_type::all();
    return view('Dashboard.fields.create', ['sports' => $sports, 'fields' => $fields]);

    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    // Validate the main fields excluding images
    $validatedData = $request->validate([
        'field_name' => 'required|string|max:255',
        'field_description' => 'required|string',
        'field_location' => 'required|string|max:255',
        'field_price' => 'required|numeric',
        'sport_type_id' => 'required|exists:sport_types,id',  // Validate sport_id against sport_types table
    'field_type_id' => 'required|exists:field_types,id',
    ]);
 

    // Default field_available to 0
    $validatedData['field_avilable'] = 0;

    // Create the field
    $field = Field::create($validatedData);

  if ($request->hasFile('field_images')) {
        foreach ($request->file('field_images') as $file) {
            // Validate each file
            $request->validate([
                'field_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Generate a unique filename
            $filename = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

            // Store the file in public/landing/img directory
            $path = $file->move(public_path('landing/img'), $filename);

            // Create a record in the field_images table
            Field_images::create([
                'field_images' => 'landing/img/' . $filename, // Store the relative path
                'field_id' => $field->id,
            ]);
        }
    }
    return redirect()->route('fields.index')->with('success', 'Field created successfully');
}



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
      $field = Field::with(['sportType', 'fieldType', 'fieldImages'])->findOrFail($id);
    return view('Dashboard.fields.show', compact('field'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    $field = Field::findOrFail($id);
    $sports = Sport_type::all();
    $fieldTypes = Field_type::all();
    return view('Dashboard.fields.edit', compact('field', 'sports', 'fieldTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
          $field = Field::findOrFail($id);

    $validatedData = $request->validate([
        'field_name' => 'required|string|max:255',
        'field_description' => 'required|string',
        'field_location' => 'required|string|max:255',
        'field_price' => 'required|numeric',
        'sport_type_id' => 'required|exists:sport_types,id',
        'field_type_id' => 'required|exists:field_types,id',
        'field_avilable' => 'required|boolean',
        'new_field_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $field->update($validatedData);

    // Handle image deletions
    if ($request->has('delete_images')) {
        foreach ($request->delete_images as $imageId) {
            $image = Field_images::findOrFail($imageId);
            if (file_exists(public_path($image->field_images))) {
                unlink(public_path($image->field_images));
            }
            $image->delete();
        }
    }

    // Handle new image uploads
    if ($request->hasFile('field_images')) {
        foreach ($request->file('field_images') as $file) {
            $filename = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->move(public_path('landing/img'), $filename);
            
            Field_images::create([
                'field_images' => 'landing/img/' . $filename,
                'field_id' => $field->id,
            ]);
        }
    }

    return redirect()->route('fields.index')->with('success', 'Field updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
     $field = Field::findOrFail($id);

    // Delete associated images
    foreach ($field->fieldImages as $image) {
        // Delete the file from storage
        if (file_exists(public_path($image->field_images))) {
            unlink(public_path($image->field_images));
        }

        // Delete the database record
        $image->delete();
    }

    // Delete the field
    $field->delete();

    return redirect()->route('fields.index')->with('success', 'Field and associated images deleted successfully');
    }
}
