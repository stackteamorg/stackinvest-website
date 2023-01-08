<?php

namespace App\Http\Controllers;

use App\Rules\MobileRule;
use Illuminate\View\View;
use Illuminate\Http\Request;


class CounselingController extends Controller
{
    public function create(): View
    {
        return view('counseling-request');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'startup_name' => ['required', 'string', 'max:255'],
            'startup_activity' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', new MobileRule()],
            'email' => ['required', 'string', 'email', 'max:255'],
            'investor_name' => ['required', 'string', 'max:255'],
            'consultation_subject' => ['required', 'string', 'max:255'],
            'type_of_consultation' => ['required', 'string', 'in:in person,online'],
            'city ​_of_residence' => ['required', 'string', 'max:255'],
        ]);
    }
}
