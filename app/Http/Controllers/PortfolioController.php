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
        return redirect()->back()->with('message', 'Message envoyé avec succès.');

    }
    
   // Afficher un utilisateur par son ID
       public function show($id)
    {
        $message = Message::find($id);
        $messageCount = Message::count();
        if (!$message) {
            return response()->json([
                'message' => 'Message non trouvé', 
                'messageCount' => $messageCount,
            ], 404);
        }
        return response()->json([
            'message' => $message,
            'messageCount' => $messageCount,
        ], 404);
    }



  
}
