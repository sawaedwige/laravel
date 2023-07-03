<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   public function Acceuil() 
   {
    return view('Acceuil');
   }

public function liste()
{
 $etudiant =etudiant::all();
 return view('liste',compact('etudiant'));
}
  public function ajouter_etudiant()
  {
    return view('ajouter');
  }
  public function ajouter_etudiant_traitement(Request $request)
  {
      $request->validate([
          'nom' => 'required',
          'prenom' => 'required',
          'email' => 'required',
          'telephone' => 'required',
      ]);
  
      $etudiant = new Etudiant();
      $etudiant->nom = $request->nom;
      $etudiant->prenom = $request->prenom;
      $etudiant->email = $request->email;
      $etudiant->telephone = $request->telephone;
      $etudiant->save();
  
      return redirect('/ajouter')->with('status', 'L\'étudiant a bien été ajouté avec succès.');
  }
  
}
