<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('portfolio.index');
    }
    
    public function store(Request $request)
    {
        // Validez les données du formulaire
        $validatedData = $request->validate([
            'fullName' => 'required',
            'email' => 'required|email',
            'subject' => 'nullable',
            'message' => 'nullable',
        ]);
        

        // Créez un nouvel enregistrement dans la table "messages"
        Message::create($validatedData);

        // Redirigez l'utilisateur vers une autre page après la soumission du formulaire
        return redirect()->route('portfolio')->with('success', 'Message envoyé avec succès.');
    }
   
}
