<?php

namespace App\Http\Livewire\Client;

use App\Models\DomaineFormation;
use App\Models\Formation;
use App\Models\TypeEtablissement;
use App\Models\Universite;
use App\Models\Ville;
use Livewire\Component;

class ChercheFormations extends Component
{
    public $query ="DUG mathematiques Rabat";
    public $formations = [];
    public $resultats = [];
    public $resultatsPlusMoinsOptions;
    public $plusMoinsOptions = false;
    public $newLine = ['universite'=>'',  
                        'typeEtab'=>'',  
                        'domaine'=>'',  
                        'ville'=>'',  
                        'niveau'=>'', 
                    ];

 
    protected $rules = [
        'newLine.universite'=>'max:250',  
        'newLine.typeEtab'=>'max:250',  
        'newLine.domaine'=>'max:250',  
        'newLine.ville'=>'max:250',  
        'newLine.niveau'=>'max:250',  
    ];

    public function render()
    {    
        if ($this->plusMoinsOptions) {
            $this->resultats = $this->plusMoinsOptions();
        }
       

        return view('livewire.client.formations.chercher-formations',[
        
            'universites' => Universite::select('id','nom','ville_id')->get(),
            'domaines' => DomaineFormation::select('id','intitule')->get(),
            'villes' => Ville::select('id','nom')->get(),
            'typeEtablissemests' => TypeEtablissement::select('id','label')->get(),
            'niveaux' => array('Bac+1', 'Bac+2', 'Bac+3', 'Bac+4', 'Bac+5'),
            
            ])->extends('layouts.accueil')
                ->section('contenu');
    }

   

    public function extractSearchParameters($words) {
        // Remove leading and trailing spaces from the string and split it into words
        $words = explode(' ', trim($words));
    
        // Initialize variables to store domain, formation, and city
        $domain = "";
        $formation = "";
        $city = "";
        $categorie = "";
       
        // Iterate through each word to identify domain, formation, and city
        foreach ($words as $word) {
            if ($this->isFormation($word)) {
                $formation .= $word . " ";
            } elseif ($this->isDomain($word)) {
                $domain .= $word . " ";
            } elseif ($this->isCity($word)) {
                $city = $word;
            }
            if ($this->isCategorie($word)) {
                $categorie = $word;
            }
        }
        //$categorie = $this->isCategorie($words[0]) ? $words[0] : "";
    
        // Trim leading and trailing spaces from domain, formation, and city
        $formation = trim($formation);
        $city = trim($city);
        $domain = trim($domain);
        $categorie = trim(strtoupper($categorie));
        //dd($categorie);
        // Create an array to hold the extracted parameters
        $parameters = array(
            "formation" => $formation,
            "domain" => $domain,
            "city" => $city,
            "categorie" => $categorie,
        );
        // Return the extracted parameters
        return $parameters;
    }
    
    
    private function isDomain($word) {
        return DomaineFormation::where('intitule', 'LIKE', "%$word%")
                                ->orWhere('initiale', 'LIKE', "%$word%")
                                ->exists();
    }
    
    private function isCity($word) {
        return Ville::where('nom', 'LIKE', "%$word%")
                    ->exists();
    }
    private function isFormation($word) {
        return Formation::where('intitule', 'LIKE', "%$word%")
                        ->orWhere('initiale', 'LIKE', "%$word%")
                        ->exists();
    }
    private function isCategorie($word) {
         return Formation::whereHas('categorie', function ($queryCategorie) use ($word) {
                $queryCategorie->where('intitule', 'LIKE', "%$word%")
                                ->orWhere('initiale', 'LIKE', "%$word%");
            })
            ->exists(); 
    }
  
    
    private function getFormationWithDomainAndCity() {
        
        $parameters = $this->extractSearchParameters($this->query);
        
        $formation = $parameters["formation"];
        $domain = $parameters["domain"];
        $city = $parameters["city"];
        $categorie = $parameters["categorie"];
       
        $query = Formation::with('domaine', 'ville')
            ->whereHas('domaine', function ($queryDomain) use ($domain) {
                $queryDomain->where('intitule', 'LIKE', "%$domain%")
                            ->orWhere('initiale', 'LIKE', "%$domain%");
            })
            ->whereHas('ville', function ($queryCity) use ($city) {
                $queryCity->where('nom', 'LIKE', "%$city%");
            })
            ->whereHas('categorie', function ($queryCategorie) use ($categorie) {
                $queryCategorie->where('initiale', 'LIKE', "%$categorie%")
                                ->orWhere('intitule', 'LIKE', "%$categorie%");
        });
    
        $resultats = $query->get();
    
        return $resultats;
    }
    
    
    private function plusMoinsOptions() {
        $validationAttributes = $this->validate();
        $universite =$this->newLine["universite"];
        $domaine =$this->newLine["domaine"];
        $niveau =$this->newLine["niveau"];
        $typeEtab =$this->newLine["typeEtab"];
        $ville =$this->newLine["ville"];

        $query = Formation::where('id', '=', 0); 
        if (!empty($universite)) {
            $query = Formation::whereHas('universite', function ($queryUniversite) use ($universite) {
                $queryUniversite->where('id', '=', $universite);
            });
            if (!empty($domaine)) {
                $query->whereHas('domaine', function ($queryDomaine) use ($domaine) {
                    $queryDomaine->where('id', '=', $domaine);
                });
            }
            if (!empty($niveau)) {
                $query->where(function ($queryNiveau) use ($niveau) {
                    $queryNiveau->where('niveau', '=', $niveau);
                });
            }
            
            if (!empty($typeEtab)) {
                $query->whereHas('type', function ($queryTypeEtab) use ($typeEtab) {
                    $queryTypeEtab->where('id', '=', $typeEtab);
                });
            }
            if (!empty($ville)) {
                $query->whereHas('ville', function ($queryVille) use ($ville) {
                    $queryVille->where('id', '=', $ville);
                });
            }
        }


        $resultats = $query->get();
        return $resultats;

  
   }
    
    
    

    
    

    public function search()
    {  
        
        $this->resultats = $this->getFormationWithDomainAndCity();

    }
}
