<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Investor;
use App\Rules\MobileRule;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class InvestorController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('investor');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', new MobileRule()],
            'email' => ['nullable', 'string', 'email', 'max:255'],
            'Investmentـtype' => ['required', 'string', 'in:venture,angel_investor'],
        ]);
        try {
            Investor::create([
                'name' => $request->name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'Investmentـtype' => $request->Investmentـtype,
            ]);
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return abort(500);
        }
       return Redirect::route('home')->with('message', 'درخواست شما با موفقیت ارسال شد');
    }
}
