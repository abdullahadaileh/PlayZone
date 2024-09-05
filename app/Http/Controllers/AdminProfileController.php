<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin_prof = auth()->user();
        // $reservation = Booking::all();
        return view('Dashboard.Profile.admin')->with('admin_prof', $admin_prof);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $admin_prof=auth()->user()->id;
        // $admin = User::findorFail($id);
        return view('Dashboard.Profile.admin')->with('admin_prof', $admin_prof);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|max:255|email',
            'phone' => 'nullable|max:15|string',
            'image' => 'nullable|mimes:png,jpg,jpeg,webp',
        ]);

        $admin_prof = User::findorFail($id);

        
        if($request->has('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'landing/img/';
            $file->move($path, $filename);

            if(File::exists($admin_prof->image)){
                File::delete($admin_prof->image);
            }
        }

        $admin_prof->update([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
            "phone" => $request->phone,
            "image" => $request->image,
        ]);

        // Handle image upload
        // if ($request->hasFile('image')) {
        //     $imageName = time().'.'.$request->image->extension();  
        //     $request->image->move(public_path('images'), $imageName);
        //     $admin_prof->image = 'images/' . $imageName;
        // }

        $admin_prof->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
        // return redirect()->route('a_profile', $admin_prof->id)->with('success', 'Profile updated successfully.'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
