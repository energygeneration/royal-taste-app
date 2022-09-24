<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CommandezController;

class CommandezController extends Controller
{
    public function create()
    {
        return view('layouts.commandez');
    }

    public function store(Request $request)
{
    $commandez = new commandez;
    // $commandez->nom = $request->nom;
    // $commandez->telephone = $request->telephone;
    // $commandez->Prix = $request->Prix;
    // $commandez->color = $request->color;
    // $commandez->Inscription = $request->Inscription;
    // $commandez->Date = $request->Date;
    // $commandez->Lieu = $request->Lieu;
    // $commandez->Heure = $request->Heure;

    $commandez->nom = 'birante';
    $commandez->telephone = '1234';
    $commandez->Prix = '1000';
    $commandez->color = 'bvnh';
    $commandez->Inscription = 'ama';
    $commandez->Date = '12';
    $commandez->Lieu = 'aer' ;
    $commandez->Heure =  '12';

    $commandez->save();
    // return "C'est bien enregistré !";
}
}