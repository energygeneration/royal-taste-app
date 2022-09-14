<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CommandezController;

class CommandezController extends Controller
{
    //
    function commandez(Request $req){
        $commandez = new commandez;
        $commandez->nom=$req->nom;
        $commandez->telephone=$req->telephone;
        $commandez->Prix=$req->Prix;
        $commandez->color=$req->color;
        $commandez->Inscription=$req->Inscription;
        $commandez->Date=$req->Date;
        $commandez->Lieu=$req->Lieu;
        $commandez->Heure=$req->Heure;
        $commandez->save();
        return('ROYAL TASTE pour vous satisfaire.
           Votre commande est bien enrégistrer, merci de nous faire confiance.');
    }
}
