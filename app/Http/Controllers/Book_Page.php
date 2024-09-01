<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Book_Page extends Controller
{
    
    public function index()
    {
        
    return view('landing_page.pages.book');
    }
}
