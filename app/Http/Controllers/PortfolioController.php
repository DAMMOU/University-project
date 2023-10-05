<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PortfolioController extends Controller
{
    /**
     * Show the portfolio page.
     */
    public function index(){
        return view('portfolio.index');
    }
    /**
     * Store a new message.
     */
    public function store(Request $request)
    {
        // Validez les données du formulaire
        $validatedData = request()->validate([
            'fullName' => 'required',
            'email' => 'required|email',
            'subject' => 'nullable',
            'message' => 'nullable',
        ]);
        

        // Créez un nouvel enregistrement dans la table "messages"
        Message::create($validatedData);

        // Redirigez l'utilisateur vers une autre page après la soumission du formulaire
        session(['targetSection' => '#contact']);
        return redirect()->back()->with('success', 'Message envoyé avec succès.');

    }
   
}
