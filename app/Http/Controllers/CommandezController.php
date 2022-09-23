<?php

namespace App\Http\Controllers;

use App\Models\Commandez;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CommandezController;

class CommandezController extends Controller
{
    //
    function commandezs(Request $req){
        $command = new Commandez;
        $command->nom = $req->nom;
        $command->telephone = $req->telephone;
        $command->Prix = $req->Prix;
        $command->color = $req->color;
        $command->Inscription = $req->Inscription;
        $command->Date = $req->Date;
        $command->Lieu = $req->Lieu;
        $command->Heure = $req->Heure;
        $command->save();
        return('ROYAL TASTE pour vous satisfaire.
           Votre commande est bien enrégistrer, merci de nous faire confiance.');
    }
}
