<?php

use App\utilisateur;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommandezController;
use App\Http\Controllers\ActualiterController;
use App\Http\Controllers\FormulaireController;
use App\Http\Controllers\afficherCommandeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/layouts', function () {
    return view('layouts.patisserie');
})->name('patisserie');

Route::get('/traiteur', function () {
    return view('layouts.traiteur');
})->name('traiteur');

Route::get('/formulaire', function () {
    return view('layouts.formulaire');
})->name('formulaire');

Route::get('/utilisateur', function () {
    $utilisateur = new utilisateur;
    $utilisateur->nom = request('nom');
    $utilisateur->prenom = request('prenom');
    $utilisateur->email = request('email');
    $utilisateur->telephone = request('telephone');
    $utilisateur->events = request('events');
    $utilisateur->numberperson = request('numberperson');
    $utilisateur->budget = request('budget');
    $utilisateur->message = request('message');
    $utilisateur->save();
    return "merci" .request('nom') .request('prenom') .request('email') .request('telephone') .request('events') .request('numberperson') .request('budget') .request('message');

})->name('formulaire');


Route::get('/commandez', function () {
    return view('layouts.commandez');
})->name('commandez');

Route::get('/admin-dashbord', function () {
    return view('layouts.admin-dashbord');
})->name('admin-dashbord');

// Route::get('/afficherCommande', function () {
//     return view('layouts.afficherCommande');
// })->name('afficherCommande');

// commandez database route
Route::get('/afficherCommandes', [afficherCommandeController::class, 'afficherCommander'])->name('afficherCommandes');
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// formulaire database route
route::post('formulaire', [FormulaireController::class, 'formulaire'])->name('formulaire');

// commandez database route
Route::post('/commandez', [CommandezController::class, 'commandezs'])->name('commandez');

// actualiter database route
// Route::get('/index', [ActualiterController::class, 'actualiter']);
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
