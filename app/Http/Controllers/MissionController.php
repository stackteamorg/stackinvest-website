<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function create()
    {
        return view('pages.mission');
    }
}

