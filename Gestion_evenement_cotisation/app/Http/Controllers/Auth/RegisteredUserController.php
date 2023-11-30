<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
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
        // dd($request->file('leye'));

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'telephone' => ['required', 'string', 'max:255', 'unique:users,telephone'],
            'leye' => ['required', 'image'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        // dd($request);
        $imageName = time() . '.' . $request->leye->extension();

        $request->leye->move(public_path('images'), $imageName);




        $user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'photo' => $imageName,
            'email' => strtolower($request->email),
            'telephone' => $request->telephone,
            'role' => 'user',
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
