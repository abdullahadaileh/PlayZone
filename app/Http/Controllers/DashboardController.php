<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Field;
use App\Models\Booking; 
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $usersCount = User::count();

        $adminsCount = User::where('role', 'admin')->count();

        $fieldsCount = Field::count();

        $bookingsCount = Booking::count();

        $users = User::all();

        return view('dashboard.main', compact('users','usersCount', 'adminsCount', 'fieldsCount', 'bookingsCount'));
    }
}
