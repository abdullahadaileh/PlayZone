<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }
    
    public function create()
    {
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

    // edite user role
    public function editRole($id)
    {
        $user = User::findOrFail($id);
        return view('Dashboard.edit-role', compact('user'));
    }

    public function updateRole(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|in:admin,superadmin,user',
        ]);

        $user = User::findOrFail($id);
        $user->role = $request->role;
        $user->save();

        return redirect()->route('dashboard.main')->with('success', 'User role updated successfully.');
    }

    public function destroy($id)
    {

        if (auth()->user()->role !== 'superadmin') {
            return redirect()->back()->with('error', 'You do not have permission to perform this action.');
        }

        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('dashboard.main')->with('success', 'User deleted successfully.');
    }
}
