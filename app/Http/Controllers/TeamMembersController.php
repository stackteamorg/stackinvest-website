<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamMembersController extends Controller
{
    public function create()
    {
        return view('pages.team-members');
    }
}
