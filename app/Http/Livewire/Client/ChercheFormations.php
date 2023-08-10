<?php

namespace App\Http\Livewire\Client;

use App\Models\CategorieFormation;
use App\Models\Formation;
use App\Models\Ville;
use Livewire\Component;

class ChercheFormations extends Component
{
    public $query="Master domaine1 Rabat";
    public $formations = [];
    public $resultats = [];
    public $AutreOptions = false;
 
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

    
    
    public function getThreeWords($inputString) {
        // Supprime les espaces en début et fin de la chaîne et divise la chaîne en mots
        $words = explode(' ', trim($inputString));
        // Récupère les trois premiers mots et les renvoie sous forme de tableau
        $threeWords = array_slice($words, 0, 3);
        return $threeWords;
    }

    public function getCategorieFormation($initiale) {
        $res = CategorieFormation::where('initiale','LIKE', 
                        '%' ."$initiale". '%')->first();
        return $res;
    }
    public function getVilleFormation($nom) {
        $res = Ville::where('nom','LIKE', 
                        '%' ."$nom". '%')->first();
        return $res;
    }

    public function getFormationOfInitialeAndDimaine($threeWordsArray){
        $categorieFormation = $this->getCategorieFormation($threeWordsArray[0]);
        if($categorieFormation){
            $getFormations = $categorieFormation->formations();
            
            if($getFormations){
                $getFormationsdomaine = $getFormations
                    ->where('domaine','LIKE', '%' ."$threeWordsArray[1]". '%')
                    ->get();
                 
                if($getFormationsdomaine){
                    $this->resultats = $getFormationsdomaine;
                    $this->query = $categorieFormation->initiale." ".$threeWordsArray[1];
                    // $getFormationsdomaine['0']->toArray()['domaine']
                    return $getFormationsdomaine;

                }else{
                    $this->resultats = $getFormations;
                    $this->query = $categorieFormation->initiale;
                    session()->flash('message',"Attention ! Nous avons de mal a trouvez le domaine indiqué.");
                    return $getFormations;
                }
                
            }else{
                session()->flash('message',"Attention ! Nous avons de mal a trouvez la formation indiquée.");
                return false;
            }
        }else{
            session()->flash('message',"Attention ! Nous avons de mal a trouvez la formation indiquée.");
            return false;
        }
        
    }


    
    

    public function searchFormations()
    {  
        $threeWordsArray = array_map('strtoupper', $this->getThreeWords($this->query));

        //$initialesFormations = array("DEUST", "LST","DUG", "LF","LP", "DUT", "MASTER");
        //$domainesFormations = array("DOMAINE", "DOMAINE2","DOMAINE3", "DOMAINE4","DOMAINE5", "DOMAINE6", "DOMAINE7");
        //$villesFormations = Ville::pluck('nom')->toArray();
        
        
        //dd($threeWordsArray);
        if ($threeWordsArray[0] == "") {
            session()->flash('message',"Attention ! Erreur de format.");
            //$this->reset();
        }elseif (count($threeWordsArray) == 1) {

            $categorieFormation = $this->getCategorieFormation($threeWordsArray[0]);
           
            if($categorieFormation){
                $getFormations = $categorieFormation->formations()->get();
               
                if($getFormations){
                    $this->resultats = $getFormations;
                    $this->query = $categorieFormation->initiale;
                }else{
                session()->flash('message',"Attention ! Vous pouvez amilioer la rechercher en ajoutant le domaine et la ville.");
                }
            }else{
                session()->flash('message',"Attention ! Vous pouvez amilioer la rechercher en ajoutant le domaine et la ville.");
            }
         

        }elseif (count($threeWordsArray) == 2) {
            $this->getFormationOfInitialeAndDimaine($threeWordsArray);
        }elseif (count($threeWordsArray) == 3 ) {
           
            $ville = $this->getVilleFormation($threeWordsArray[2]);
            $getFormationsdomaine = $this->getFormationOfInitialeAndDimaine($threeWordsArray);
            if($ville && $getFormationsdomaine){
                $categorieFormation = $this->getCategorieFormation($threeWordsArray[0]);
                
                $getFormations = $categorieFormation->formations();

                $getFormationsdomaineVille = $getFormations
                ->where('domaine','LIKE', '%' ."$threeWordsArray[1]". '%')
                ->where('ville_id', $ville->id)
                ->get();
                if($getFormationsdomaineVille) {
                    $this->resultats = $getFormationsdomaineVille;
                    $this->query = $categorieFormation->initiale
                            ." ".$threeWordsArray[1]." "
                            .Ville::find($ville->id)->nom;
                }elseif($ville){
                    $getFormationsdomaineVille = $getFormations
                        ->where('ville_id', $ville->id)
                        ->get();
                    $this->resultats = $getFormationsdomaineVille;
                } 
            }
        }
        
        //in_array(strtoupper($threeWordsArray[1]), $domainesFormations) )
        //$this->CategorieFormations = CategorieFormation::pluck('initiale')->toArray();
        //$getFormationsdomaine['0']->toArray()['domaine']
    

        
      
    }
    
  

}
