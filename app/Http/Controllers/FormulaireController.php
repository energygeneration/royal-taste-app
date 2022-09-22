<?php

namespace App\Http\Controllers;

use App\Models\formulaire;
use Illuminate\Http\Request;

class FormulaireController extends Controller
{
    //
    function formulaire(Request $req){
        $formulaire = new formulaire;
        $formulaire->nom=$req->nom;
        $formulaire->prenom=$req->prenom;
        $formulaire->email=$req->email;
        $formulaire->telephone=$req->telephone;
        $formulaire->events=$req->events;
        $formulaire->numberperson=$req->numberperson;
        $formulaire->budget=$req->budget;
        $formulaire->message=$req->message;
        $formulaire->save();
        return('Merci de nous faire confiance, votre résėrvation du sevice-traiteur est bien enrégistrer. Vous serez contacter pour la suite');
    }
}
