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

    //traitement du formulaire
    public function store(Request $request){
       //dd($request->all());

        $marche = new Marche();

      //récupérer les données du formulaire
        $marche->ville_id = $request->ville;
        $marche->nomMarche = $request->nomMarche;
        $marche->description = $request->description;
        $marche->capacite = $request->capacite;
        $marche->adresse = $request->adresse;
        $marche->telephone = $request->phone;
        $marche->image = $request->img->store('', 'public');

        //enregistrement dans la base de données avec save()
        $marche -> save();

        return redirect()->route('marche.list') -> with('status', 'Le marché a été enregistré avec succès !');
    }

    //afficher la liste des marchés
    public function list(){
        //creer un marche
        $marches = Marche::paginate(3);

        return view('list', compact('marches'));//compact permet d'injecter la variable marches au niveau de la vue

    }

    //modifier un marche
    public function modifier($idMarche){
        //dd($idMarche);
        //rechercher l'objet marche
        $marches = Marche::findOrFail($idMarche);
        $villes =Ville::all();

         return view ('marche.modifier', compact('marches','villes'));
    }

    //traitement au niveau du formulaire de modification
    public function update(Request $request){
        $marche = Marche::find($request->id);

          $marche->ville_id = $request->ville;
          $marche->nomMarche = $request->nomMarche;
          $marche->description = $request->description;
          $marche->capacite = $request->capacite;
          $marche->adresse = $request->adresse;
          $marche->telephone = $request->phone;
          $marche->image = $request->img->store('', 'public');

          //enregistrer les modifications avec update()
          $marche -> update();

          return redirect()->route('marche.list');
    }

    //supprimer les marches
    public function supprimer($idMarche){

        $marche = Marche::find($idMarche);
         $marche->delete();

         return redirect()->route('marche.list');
    }
}
