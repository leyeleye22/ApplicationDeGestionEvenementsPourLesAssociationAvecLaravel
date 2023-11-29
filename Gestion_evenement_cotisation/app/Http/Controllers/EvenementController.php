<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEvenementRequest;
use App\Http\Requests\UpdateEvenementRequest;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        $even = Evenement::FindOrFail($req->id);
        if ($even->delete()) {
            return redirect('/dashboard/association');
        } else {
            // return redirect('/viewmore/{{$even->id}}');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        // dd($req->id);
        $even = Evenement::FindOrFail($req->id);
        return view('Company.datilsEvens', compact('even'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEvenementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Evenement $evenement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $req)
    {
        // dd($req->file('logo'));
        $even = Evenement::FindOrFail($req->association);
        $req->validate([
            'libelle' => 'required|max:255',
            'dateevement' => 'required|date',
            'description' => 'required',
            'closing_date' => 'required|date',
            'clotured' => 'required|in:oui,non',
        ]);
        $even->libelle = $req->libelle;
        $even->date_limite_inscription = $req->closing_date;
        $even->description = $req->description;
        if ($req->clotured == "oui") {
            $even->clotured = 'isclotured';
        } else {
            $even->clotured = 'isnotclotured';
        }
        $even->date_evenement = $req->dateevement;

        if ($req->file('logo')) {
            // dd('ok');
            $imageName = time() . '.' . $req->logo->extension();

            $req->logo->move(public_path('images'), $imageName);
            $even->image = $imageName;
        }
        if ($even->update()) {
            return redirect('/dashboard/association');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req)
    {
        $even = Evenement::FindOrFail($req->id);
        return view('Company.updateevens', compact('even'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $evenement)
    {
        //
    }
}
