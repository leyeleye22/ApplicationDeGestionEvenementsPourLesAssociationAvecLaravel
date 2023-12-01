<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evenement;
use App\Models\Reservation;
use App\Notifications\MailConfirmed;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $firstEvens = Evenement::inRandomOrder()->take(1)->get();
        $SecondEvens = Evenement::inRandomOrder()->take(1)->get();
        $thirdEvens = Evenement::inRandomOrder()->take(1)->get();
        $firstThreeEvens = Evenement::inRandomOrder()->take(3)->get();

        $randomEvents = Evenement::inRandomOrder()->take(3)->get();
        $evens = Evenement::all();
        return view('Clients.dashboard', compact('evens', 'randomEvents', 'firstThreeEvens', 'firstEvens', 'SecondEvens', 'thirdEvens'));
    }
    public function Events()
    {
        $evens = Evenement::all();
        return view('Clients.Events', compact('evens'));
    }
    public function createeven($id1, $id2)
    {

        return view('Clients.Reservation', compact('id1', 'id2'));
    }
    public function storeeven(Request $request)
    {

        $request->validate([
            'places' => 'required|numeric',
        ]);
        $client = User::FindOrFail($request->iduser);
        $even = Evenement::FindOrFail($request->ideven);

        function genererMatricule()
        {
            $lettres = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 6);
            $chiffres = substr(str_shuffle('0123456789'), 0, 5);
            return $lettres . $chiffres;
        }
        $reservation = Reservation::where('user_id', $client->id)->where('evenement_id', $even->id)->first();
        if ($reservation) {
            $reservation->nombre_place += $request->places;
            if ($reservation->update()) {
                return redirect('/client/events');
            }
        } else {
            $references = genererMatricule();
            $reservation = new Reservation();
            $reservation->user_id = $client->id;
            $reservation->evenement_id = $even->id;
            $reservation->references = $references;
            $reservation->nombre_place = $request->places;
            $reservation->accepted = 'isaccepted';
            if ($reservation->save()) {
                $client->notify(new MailConfirmed());
                return redirect('/client/events');
            } else {
                dd('error');
            }
        }
    }
}
