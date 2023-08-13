<?php

namespace App\Http\Livewire\Client;

use App\Models\CategorieFormation;
use App\Models\DomaineFormation;
use App\Models\Formation;
use App\Models\Universite;
use App\Models\Ville;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ChercheFormations extends Component
{
    public $query="Master domaine1 Rabat";
    public $formations = [];
    public $resultats = [];
    public $plusMoinsOptions = false;
    public $newLine;
    private $index = array(); // Table de hachage pour l'index
 
    protected $rules = [
       
        'query'=>'required|max:250', 
    ];

    public function render()
    {   
        return view('livewire.client.formations.formations',[
        
            'universites' => Universite::select('id','nom','ville_id')->get(),

            ])->extends('layouts.accueil')
                ->section('contenu');
    }

   

    public function addToIndex($phrase) {
        // Supprime les espaces en début et fin de la chaîne et divise la chaîne en mots
        $mots = explode(' ', trim($phrase));
        // Récupérer la ville (dernier mot)
        $ville = array_pop($mots);
        
        // Recherche du domaine et de la formation dans les mots restants
        $domaine = "";
        $formation = "";
        foreach ($mots as $mot) {
            if ($this->estDomaine($mot)) {
                $domaine = $mot;
            } else {
                $formation .= $mot . " ";
            }
        }
        dd($domaine);
        $formation = trim($formation);

        // Requête pour récupérer les données
        $resultats = DB::table('formations')
            ->join('domaine_formations', 'formations.domaine_formation_id', '=', 'domaine_formations.id')
            ->join('villes', 'formations.ville_id', '=', 'villes.id')
            ->where('domaine_formations.intitule', 'LIKE', "%$domaine%")
            ->where('formations.intitule', 'LIKE', "%$formation%")
            ->where('villes.nom', '=', $ville)
            ->select('formations.*')
            ->get();

        return $resultats;
    }

    private function estDomaine($mot) {
        return DomaineFormation::where('intitule', 'LIKE', '%' . $mot . '%')
            ->orWhere('initiale', 'LIKE', '%' . $mot . '%')
            ->exists();
    }
    //private function estVille($mot) {
    //    return DB::table('villes')
    //        ->where('nom', '=', $mot)
    //        ->exists();
    //}

    
    
}  