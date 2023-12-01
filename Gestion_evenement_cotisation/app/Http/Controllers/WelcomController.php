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
        $evens = Evenement::all();
        return view('Events', compact('evens'));
    }
    public function about()
    {
        $evens = Evenement::inRandomOrder()->take(1)->get();
        return view('About', compact('evens'));
    }
}
