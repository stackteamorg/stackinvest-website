<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function create()
    {
        return view('pages.portfolio');
    }
}
