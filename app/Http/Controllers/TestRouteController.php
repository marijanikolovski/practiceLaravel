<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRouteController extends Controller
{
    public function postRequest()
    {
        return view('testRoute');
    }
}
