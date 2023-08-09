<?php

namespace App\Http\Livewire\Client;

use App\Models\CategorieFormation;
use App\Models\Formation;
use App\Models\Ville;
use Livewire\Component;

class ChercheFormations extends Component
{
    public $query="Master domaine";
    public $formations = [];
    public $resultats = [];
 
    protected $rules = [
       
        'query'=>'required|max:250', 
    ];

    public function render()
    {   
        //$formations = Formation::select('id')->get();
        return view('livewire.client.formations.formations')
                ->extends('layouts.accueil')
                ->section('contenu');
    }

    
    
    function getThreeWords($inputString) {
        // Supprime les espaces en début et fin de la chaîne et divise la chaîne en mots
        $words = explode(' ', trim($inputString));
        
        // Si la chaîne ne contient pas au moins trois mots, renvoie un tableau vide
        if (count($words) < 1 ) {
            return [];
        }
        
        // Récupère les trois premiers mots et les renvoie sous forme de tableau
        $threeWords = array_slice($words, 0, 3);
        return $threeWords;
    }

    
    

    public function searchFormations()
    {  
        $initialesFormations = array("DEUST", "LST","DUG", "LF","LP", "DUT", "MASTER");
        $domainesFormations = array("DOMAINE", "DOMAINE 2","DOMAINE 3", "DOMAINE 4","DOMAINE 5", "DOMAINE 6", "DOMAINE 7");
        $villesFormations = Ville::pluck('nom')->toArray();
        
        $threeWordsArray = $this->getThreeWords($this->query);
        if (count($threeWordsArray) == 0) {
            session()->flash('message',"Attention ! Erreur de format.");
            //$this->reset();
        }
        //$this->CategorieFormations = CategorieFormation::pluck('initiale')->toArray();
 
    

        if (in_array(strtoupper($threeWordsArray[0]), $initialesFormations) &&
            in_array(strtoupper($threeWordsArray[1]), $domainesFormations) ) {
            // Trouvez la catégorie de formation par son titre
            $categorieFormation = CategorieFormation::where('initiale', $threeWordsArray[0])->first();
            $this->resultats = $categorieFormation->formations()
                ->where('domaine', "Domaine 4")
                ->get();
                
           
           

        }

      
    }
    
  

}
