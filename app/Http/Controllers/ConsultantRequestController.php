<?php

namespace App\Http\Controllers;

use App\Models\ConsultantRequest;
use App\Rules\MobileRule;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ConsultantRequestController extends Controller
{
    public function create()
    {
        return view('pages.consultant-request');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'startup' => 'required|string',
            'department' => 'required|string',
            'email' => 'required|string|email',
            'mobile' => ['required', 'string', new MobileRule()],
            'investor' => 'required|string',
            'subject' => 'required|string',
            'type' => 'required|string|in:online,personal',
            'city' => 'required|string|min:4',
        ]);

        try {
            ConsultantRequest::create([
                'username' => $request->username,
                'startup_name' => $request->startup,
                'startup_department' => $request->startup,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'investor' => $request->investor,
                'subject' => $request->subject,
                'requestType' => $request->type,
                'city' => $request->city,
            ]);
        } catch (Exception $ex) {
            Log::error($ex->getMessage());
            return abort(500);
        }

        return back()->with('message', 'Add your message successfully');
    }
}
