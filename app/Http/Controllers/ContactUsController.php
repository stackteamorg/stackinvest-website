<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Rules\MobileRule;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Log;

class ContactUsController extends Controller
{

    public function create()
    {
        return view('pages.contact-us');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'mobile' => ['required', 'string', new MobileRule()],
            'subject' => 'required|string',
            'body' => 'required|string|min:10',
        ]);

        try {
            Message::create([
                'username' => $request->username,
                'mobile' => $request->mobile,
                'subject' => $request->subject,
                'body' => $request->body,
            ]);
        } catch (Exception $ex) {
            Log::error($ex->getMessage());
            return abort(500);
        }

        return back()->with('message', Lang::get('validation.success'));
    }
}
