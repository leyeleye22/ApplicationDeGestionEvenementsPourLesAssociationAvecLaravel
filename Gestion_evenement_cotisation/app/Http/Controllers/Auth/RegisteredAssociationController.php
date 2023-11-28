<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Association;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredAssociationController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.registerEntreprise');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->file());


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'login' => ['required', 'string', 'max:255', 'unique:associations,login'],
            'created' => ['required', 'date'],
            'slogan' => ['required', 'string', 'max:255'],
            'logo' => ['required', 'image', 'max:2048'],
            'password' => ['required', Rules\Password::defaults()],
        ]);

        $file = $request->file('logo')->store('images', 'public');



        $association = Association::create([
            'name' => $request->name,
            'login' => $request->login,
            'datecreated' => $request->created,
            'slogan' => $request->slogan,
            'logo' => $file,
            'password' => Hash::make($request->password),
        ]);
        event(new Registered($association));

        Auth::login($association);

        return redirect(RouteServiceProvider::HOMEAssociation);
    }
}
