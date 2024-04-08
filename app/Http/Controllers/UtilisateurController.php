<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class UtilisateurController extends Controller
{
   

    public function store(Request $request)
    {
       $utilisateurs=Utilisateur::create([
                    'nom'=> $request->input('nom'),
                    'prenom' => $request->input('prenom'),
                    'annee' => $request->input('dtn'),
        ]);
        return redirect('/') ->with('success','inscription réussie');
    }
    public function showUtilisateur()
    {
        $utilisateurs= Utilisateur::all();
        return view('welcome',['users' => $utilisateurs]);
    }

    public function showPage($idd)
    {
       
        return view('update',['idU' => $idd]);
    }

    public function updateUser(Request $request,$id)
    {
        $utilisateur = Utilisateur::find($id);
        if ($utilisateur) 
        {
            $utilisateur->annee=$request->input('dtn');
            $utilisateur->save();
            return redirect('/user');
        } 
        else 
        {
            return "L'utilisateur avec l'ID $id n'a pas été trouvé.";
        }
    }
}
