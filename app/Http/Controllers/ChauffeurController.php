<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Voiture;
use Illuminate\Http\Request;

class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chauffeurs = Chauffeur::with('voiture')->paginate(10);
        // dd($chauffeurs);
        return view('pages.chauffeur.index', compact('chauffeurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $voitures = Voiture::all();
        return view('pages.chauffeur.create', compact('voitures'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nom' => 'required | string | min:3',
            'prénom' => 'required | string | min:3',
            'age' => 'required | numeric | min:18 | max:60',
            'numéro_permis' => 'required | string',
            'type_permis' => 'required | string',
            'cin' => 'required | string',
            'voiture' => 'nullable | exists:voitures'
        ]);
        $voiture = null;
        if ($request->has('voiture')) {
            $voiture = $request->input('voiture');
        }
        Chauffeur::create([...$request->all(), $voiture]);
     
        return redirect()->route('chauffeur.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
