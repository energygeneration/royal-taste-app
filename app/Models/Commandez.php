<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandez extends Model
{
    use HasFactory;
    function utilisateur(Request $request){
        $utilisateur = new utilisateur;
    
    $utilisateur->nom = request('nom');
    $utilisateur->email = request('email');
    $utilisateur->telephone = request('telephone');
    $utilisateur->Prix = request('Prix');
    $utilisateur->color = request('color');
    $utilisateur->Inscription = request('Inscription');
    $utilisateur->Date = request('Date');
    $utilisateur->Lieu = request('Lieu');
    $utilisateur->Heure = request('Heure');
    $utilisateur->save();
    }
    
}
