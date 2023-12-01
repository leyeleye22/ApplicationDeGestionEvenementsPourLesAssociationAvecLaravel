<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evenement;
use App\Models\Reservation;
use function Ramsey\Uuid\v1;

use Illuminate\Http\Request;
use App\Notifications\MailRefused;
use Illuminate\Support\Facades\Auth;
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
    public function view()
    {
        $events = Evenement::where('association_id', Auth::guard('association')->user()->id)->get();
        return view('Company.reservations', compact('events'));
    }
    public function show($id)
    {
        $evenement = Evenement::findOrFail($id);
        $reservations = Reservation::where('evenement_id', $evenement->id)->get();
        $user_ids = $reservations->pluck('user_id');
        $users = User::whereIn('id', $user_ids)->get();
        // dd($users);
        return view('Company.userreservations', compact('evenement', 'users', 'reservations'));
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
    public function delete($iduser, $reservation)
    {
        $reservations = Reservation::where('id', $reservation)->where('user_id', $iduser)->firstOrFail();
        if ($reservations->accepted == 'isnotacpeted') {
            $reservations->accepted = 'isaccepted';
        } else {
            $reservations->accepted = 'isnotacpeted';
        };
        $client = User::FindOrFail($iduser);
        if ($reservations->update()) {
            $client->notify(new MailRefused());
            return redirect('/client/events');
        } else {
            dd('error');
        }
    }
}
