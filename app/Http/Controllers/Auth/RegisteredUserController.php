<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Rules\MobileRule;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'startup_name'=>['required','string','max:255'],
            'name' => ['required', 'string', 'max:255'],
            'lastname'=>['required','string','max:255'],
            'mobile'=>['required','string',new MobileRule()],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'level'=>['required','string', 'in:mvp,prototype,idea'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'startup_name'=>$request->startup_name,
            'name' => $request->name,
            'lastname'=>$request->lastname,
            'mobile'=>$request->mobile,
            'email' => $request->email,
            'level'=>$request->level,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
