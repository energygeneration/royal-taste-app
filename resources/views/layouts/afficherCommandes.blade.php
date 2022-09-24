@extends('layouts.admin-dashbord')
@section('commande')
    <div>
        <h1>liste des commandes</h1>
        <table>
            <tr class="bg-primary">
                <th><h4 class="p-3">nom</h4></th>
                <th><h4 class="p-3">telephone</h4></th>
                <th><h4 class="p-3">Prix</h4></th>
                <th><h4 class="p-3">color</h4></th>
                <th><h4 class="p-3">Inscription</h4></th>
                <th><h4 class="p-3">Date</h4></th>
                <th><h4 class="p-3">Lieu</h4></th>
                <th><h4 class="p-3">Heure</h4></th>
                <th><h4 class="p-3">Action</h4></th>
            </tr>

           @forench($commande as $commande) 
            <tr class="bg-info">
                <th><h4 class="p-3">{{(commande->nom)}}</h4></th>
                <th><h4 class="p-3">{{(commande->telephone)}}</h4></th>
                <th><h4 class="p-3">{{(commande->Prix)}}</h4></th>
                <th><h4 class="p-3">{{(commande->color)}}</h4></th>
                <th><h4 class="p-3">{{(commande->Inscription)}}</h4></th>
                <th><h4 class="p-3">{{(commande->Date)}}</h4></th>
                <th><h4 class="p-3">{{(commande->Lieu)}}</h4></th>
                <th><h4 class="p-3">{{(commande->Heure)}}</h4></th>
            </tr>
            @endforench
        </table>
    </div>
@endsection