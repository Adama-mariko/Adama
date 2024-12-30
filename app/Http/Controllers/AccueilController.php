<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AccuielController;
use App\Models\Accueil;


class AccueilController extends Controller
{
   public function index(){
      $competences = [
         ['name' => 'JSON', 'image' => 'json.png'],
         ['name' => 'Laravel', 'image' => 'laravel.png'],
         ['name' => 'PHP', 'image' => 'php.jpeg'],
         ['name' => 'JavaScript', 'image' => 'java.png'],
         ['name' => 'Flutter', 'image' => 'flutter.jpeg'],
         ['name' => 'WordPress', 'image' => 'wordpress-logo.png'],
         ['name' => 'HTML', 'image' => 'html.png'],
         ['name' => 'CSS', 'image' => 'css.png'],
     ];
    return view('accueil', compact('competences'));

    $accueils = Accueil::all();
    return view('accueil', compact('accueils'));
   }

   public function store(Request $request)
   {
       // Validation des données
       $request->validate([
           'nom' => 'bail|required|string|max:255',
           'prenom' => 'bail|required|string|max:255',
           'telephone' => 'bail|required|string|max:15',
           'email' => 'bail|required|email',
           'message' => 'bail|required|max:500',
       ]);
   
       Accueil::create($request->only(['nom', 'prenom', 'telephone', 'email', 'message']));
   
       return response()->json(['message' => 'C\'est bien enregistré !'], 201);
   }
   
      
      
}
