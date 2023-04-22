<?php

namespace App\Http\Livewire\Client;

use App\Models\Cv;
use App\Models\Exemple;
use Livewire\Component;

class Exemples extends Component
{
    
   
    
    public function render()
{
    // Récupération des exemples de CVs
    $exemplesCvs = Exemple::whereHas('categorieExemple', function ($query) {
            $query->where('intitule', '=', 'Cv');
        })->get();
    
    // Récupération des exemples de lettres de motivation
    $exemplesLettres = Exemple::whereHas('categorieExemple', function ($query) {
            $query->where('intitule', '=', 'Lettre de motivation');
        })->get();
    
    // Récupération des exemples de demandes
    $exemplesDemandes = Exemple::whereHas('categorieExemple', function ($query) {
            $query->where('intitule', '=', 'Demande');
        })->get();
    
    // Récupération des CVs
    $cvs = Cv::get();
    
    // Récupération de tous les exemples
    $exemples = Exemple::get();
    
    // Retourne la vue 'exemples' en passant les variables récupérées comme données
    return view('livewire.client.exemples.exemples', [
            'cvs' => $cvs,
            'exemples' => $exemples,
            'exemplesCvs' => $exemplesCvs,
            'exemplesLettres' => $exemplesLettres,
            'exemplesDemandes' => $exemplesDemandes,
        ])
        ->extends('layouts.accueil')
        ->section('contenu');
}

    
}
