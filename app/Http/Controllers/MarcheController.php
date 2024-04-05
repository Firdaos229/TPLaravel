<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marche;
use App\Models\Ville;

class MarcheController extends Controller
{
    public function create(){
        $villes =Ville::all();

       // dd($villes);
        return view ('marche.create', [
            'villes'=>$villes
        ]);

    }

    public function store(Request $request){
       //dd($request->all());

        $marche = new Marche();

        $marche->ville_id = $request->ville;
        $marche->nomMarche = $request->nomMarche;
        $marche->description = $request->description;
        $marche->capacite = $request->capacite;
        $marche->adresse = $request->adresse;
        $marche->telephone = $request->phone;
        $marche->image = $request->img->store('', 'public');

        //enregistrement dans la base de données
        $marche -> save();

        return redirect()->route('marche.list') -> with('status', 'Le marché a été enregistré avec succès !');
    }


    public function list(){
        $marches = Marche::all();
        return view('list', compact('marches'));

    }
}
