<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $first_name = 'Marija';

        return view('home', compact('first_name'));
    }
}
