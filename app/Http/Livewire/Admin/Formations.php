<?php

namespace App\Http\Livewire\Admin;

use App\Models\CategorieFormation;
use App\Models\Etablissement;
use App\Models\Formation;
use App\Models\TypeFormation;
use App\Models\Universite;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Formations extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $isBtnAddCliked = false;
    public $currentPage = PAGELIST;
    public $table = "Formations";
    public $tabelIn = "";
    public $newLine = [];
    public $updateLine = [];
    public $universite = [];
    public $etablissements = [];
    public $etablissementDeFormation;
    public $universiteDeFormation;
    
   
    public function render()
    {    
        if(!empty($this->universite)){
            $this->etablissements = Etablissement::where('universite_id',$this->universite)->get();
            
        }
        return view('livewire.admin.formations.index',[
            'formations' => Formation::latest()->paginate(10),
            'universites' => Universite::get(['id', 'nom', 'ville_id']),
            'typeFormations' => TypeFormation::all(),
            'categorieFormations' => CategorieFormation::all(),
        ])
            ->extends('layouts.master')
            ->section('contenu');
    }
    public function rules(){
        if($this->currentPage == PAGEEDIT){
            return[
                'updateLine.etablissement_id' => 'required| numeric',
                'updateLine.universite_id' => 'required| numeric',
                'updateLine.type_formation_id' => 'required| numeric',
                'updateLine.categorie_formation_id' => 'required| numeric',
                'updateLine.initiale' => 'required',
                'updateLine.intitule' => 'required',
                'updateLine.desc' => 'required',
                'updateLine.duree' => 'required',
                'updateLine.niveau' => 'required',
                'updateLine.etat' => ' numeric',

            ];
        }
        return [
            'newLine.etablissement_id' => 'required| numeric',
            'newLine.universite_id' => 'required| numeric',
            'newLine.type_formation_id' => 'required| numeric',
            'newLine.categorie_formation_id' => 'required| numeric',
            'newLine.initiale' => 'required| max:6',
            'newLine.intitule' => 'required| max:255',
            'newLine.desc' => 'required| max:255',
            'newLine.duree' => ' numeric|max:10',
            'newLine.niveau' => ' numeric|max:10',
            'newLine.etat' => ' numeric|max:10',
        ];
    }
    public function goToAdd()
    {   
        $this->currentPage = PAGECREATE;  
        $this->tabelIn = ' / Ajouter';
       

      
    }
  

    public function addLine()
    {
        
        $validationAttributes = $this->validate();
        //dump($validationAttributes );
        $validationAttributes['newLine']['initiale']= strtoupper($validationAttributes['newLine']['initiale']);
        $validationAttributes['newLine']['intitule']= ucwords(strtolower($validationAttributes['newLine']['intitule']));
      
        Formation::create($validationAttributes['newLine']);
        
        $this->dispatchBrowserEvent('showsuccessMessage', 
            ['message'=>"Formation ajouté à  avec succès!"]);
        $this->newLine = [];
        $this->universite = [];
      
    }
   


    public function goTolist()
    {   
        $this->currentPage = PAGELIST; 
        $this->universite=[];
        $this->etablissements=[];

    }
    public function goToUpdate($id)
    {   
        $this-> updateLine = Formation::find($id);
        $this->etablissementDeFormation =  $this-> updateLine->etablissement->nom;
        $this->universiteDeFormation =  $this-> updateLine->universite->nom;
        $this-> updateLine =  $this-> updateLine->toArray();

        $this->currentPage = PAGEEDIT; 
        $this->tabelIn = ' / Editer';  
        $this->universite=[];
        

    }



    public function updateLine(){

        $validationAttributes = $this->validate();
        $validationAttributes['updateLine']['initiale']= strtoupper($validationAttributes['updateLine']['initiale']);
        $validationAttributes['updateLine']['intitule']= ucwords(strtolower($validationAttributes['updateLine']['intitule']));
      
        Formation::find($this->updateLine['id'])->update($validationAttributes['updateLine']);
        $this->dispatchBrowserEvent('showsuccessMessage', 
           ['message'=>'Formation mis à jour avec succès!']);
    }
    




    public function confirmDelete($nom, $id){
        $this->dispatchBrowserEvent('showDeleteMessageCONFIRM',['message'=>[
                'title'=>"Etes-vous sur de continuer ?",
                'text' =>"Vous êtes sur le point de supprimer $nom sur la liste des formations. voulez-vous continuer?",
                'data'=>['id'=>$id]
            ]
        ]);
    }

    public function deleteLine($id){
        Formation::destroy($id);
        $this->dispatchBrowserEvent('showsuccessMessageDELETE', 
            ['message'=>'Formation suprimer avec succès!']);
    }

   
   
}
