<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\afficherCommandeController;


class afficheCommandeController extends Controller
{
    //
    public function afficherCommander(){
        $commande = afficherCommander::all();
        return view('afficherCommandes', compact('afficherCommander'));
    }
}
