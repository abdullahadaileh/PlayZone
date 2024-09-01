<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all users from the database
        $users = User::all();

        // Return a view with the users data
        return view('users.index', compact('users'));
    }
    
    public function create()
    {
        // Return the view for creating a new user
        return view('Dashboard.create-user');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|in:user,admin',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('dashboard.main')->with('success', 'User created successfully.');
    }

    public function destroy($id)
    {
        // Check if the current user is a super admin
        if (auth()->user()->role !== 'superadmin') {
            return redirect()->back()->with('error', 'You do not have permission to perform this action.');
        }

        // Find the user by ID and delete them
        $user = User::findOrFail($id);
        $user->delete();

        // Redirect to the dashboard with a success message
        return redirect()->route('dashboard.main')->with('success', 'User deleted successfully.');
    }
}
