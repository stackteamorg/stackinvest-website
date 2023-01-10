<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngelController extends Controller
{
    public function create()
    {
        return view('pages.angel');
    }
}
