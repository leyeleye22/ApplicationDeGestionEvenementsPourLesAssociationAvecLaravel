<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evenement;
use App\Models\Association;
use Illuminate\Http\Request;
use App\Notifications\MailEven;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreAssociationRequest;
use App\Http\Requests\UpdateAssociationRequest;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $evens = Evenement::where('association_id', Auth::guard('association')->user()->id)->get();

        return view('Company.dashboard', compact('evens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $evens = new Evenement();
        $users = User::all();
        $request->validate([
            'eventitle' => 'required|string|max:255',
            'desceven' => 'required|string|max:500',
            'dateregister' => 'required|date',
            'dateeven' => 'required|date',
            'image' => 'required|image',

        ]);
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        // dd($request);
        $evens->libelle = $request->eventitle;
        $evens->date_limite_inscription = $request->dateregister;
        $evens->description = $request->desceven;
        $evens->association_id = $request->idassociation;
        $evens->image = $imageName;
        $evens->clotured = 'isnotclotured';
        $evens->date_evenement = $request->dateeven;
        if ($evens->save()) {
            foreach ($users as $user) {
                $user->notify(new MailEven());
            }
            return redirect('/dashboard/association');
        } else {
            return redirect('create/events');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Association $association)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Association $association)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssociationRequest $request, Association $association)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Association $association)
    {
        //
    }
}
