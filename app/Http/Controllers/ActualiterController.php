<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ActualiterController;

class ActualiterController extends Controller
{
    //
    function actualiter(Request $req){
        $actualiter = new actualiter;
        $actualiter->nom=$req->nom;
        $actualiter->email=$req->email;
        $actualiter->save();
        return view('textvu');
    }
}
