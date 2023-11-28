<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AssociationSessionController extends Controller
{
    public function create()
    {
        return view('auth.loginEntreprise');
    }
    public function store(Request $request)
    {
        // dd($request);
        $credentials = $request->validate([
            'login' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::guard('association')->attempt($credentials)) {
            // dd('leye est cool');
            $request->session()->regenerate();

            return redirect()->intended('dashboard/association');
        } else {
            dd('ok');
        }

        // return back()->withErrors([
        //     'login' => 'Les identifiants fournis ne correspondent pas à nos enregistrements.',
        // ]);
    }
}
