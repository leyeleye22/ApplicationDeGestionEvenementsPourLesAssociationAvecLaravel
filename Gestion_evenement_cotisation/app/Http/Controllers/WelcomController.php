<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class WelcomController extends Controller
{
    public function index()
    {
        $evens = Evenement::all();
        return view('welcome', compact('evens'));
    }
    public function contact()
    {
        return view('Contact');
    }
    public function events()
    {
        return view('Events');
    }
    public function about()
    {
        return view('About');
    }
}
