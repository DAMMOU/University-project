<?php

namespace App\Http\Livewire\Admin;

use App\Models\Etablissement;
use App\Models\Filiere;
use App\Models\Formation;
use App\Models\Universite;
use Livewire\Component;
use Livewire\WithPagination;

class Filieres extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $isBtnAddCliked = false;
    public $currentPage = PAGELIST;
    public $table = "Filieres";
    public $tabelIn = "";
    public $newLine = [];
    public $updateLine = [];
    public $universite = [];
    public $etablissements = [];
    public $formations = [];
    public $etablissementSelectionner = [];
    public $etablissementDeFiliere = [];
    public $etablissementDeFormation;
    public $universiteDeFormation;

    public function render()
    {    
          
        if(!empty($this->universite)){
            $this->etablissements = Etablissement::where('universite_id',$this->universite)->get();
            if(!empty($this->etablissementSelectionner)){
                $this->formations = Formation::where('etablissement_id',$this->etablissementSelectionner)->get();
                
            } 
        }
       
        return view('livewire.admin.filieres.index',[
            'filieres' => Filiere::latest()->paginate(10),
            'universites' => Universite::orderBy('nom','asc')->get(['id','nom','ville_id']),
        ])
            ->extends('layouts.master')
            ->section('contenu');
    }
    public function rules()
    {
        if($this->currentPage == PAGEEDIT){
            return[
                'updateLine.formation_id' => 'required| numeric',
                'updateLine.etablissement_id' => 'required| numeric',
                'updateLine.intitule' => 'required',
                'updateLine.initiale' => 'required',
          
            ];
        }
        return [
            'newLine.formation_id' => 'required| numeric',
            'newLine.etablissement_id' => 'required| numeric',
            'newLine.intitule' => 'required| max:255',
            'newLine.initiale' => 'required| max:255',
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
        $validationAttributes['newLine']['initiale']= strtoupper($validationAttributes['newLine']['initiale']);
        $validationAttributes['newLine']['intitule']= ucwords(strtolower($validationAttributes['newLine']['intitule']));
      
        Filiere::create($validationAttributes['newLine']);
        
        $this->dispatchBrowserEvent('showsuccessMessage', 
            ['message'=>"Filiere ajouté à  avec succès!"]);
        $this->newLine = [];
    }
   


    public function goToUpdate($id)
    {   
        $this-> updateLine = Filiere::find($id);
        
        
        $this->universite = $this-> updateLine->etablissement->universite->id;
        $this->etablissementDeFiliere = $this-> updateLine->etablissement; 
        $this->formations = [];
        $this-> updateLine = Filiere::find($id)->toArray();
        $this->currentPage = PAGEEDIT; 
        $this->tabelIn = ' / Editer'; 
    }
    public function updateLine(){

        $validationAttributes = $this->validate();
        $validationAttributes['updateLine']['initiale']= strtoupper($validationAttributes['updateLine']['initiale']);
        $validationAttributes['updateLine']['intitule']= ucwords(strtolower($validationAttributes['updateLine']['intitule']));
      
        Filiere::find($this->updateLine['id'])->update($validationAttributes['updateLine']);
        $this->dispatchBrowserEvent('showsuccessMessage', 
           ['message'=>'Filiere mis à jour avec succès!']);
        $this->universite = [];
        $this->etablissementSelectionner = [];
        
    }












    public function goTolist()
    {   
        $this->currentPage = PAGELIST;  
    }










   



    public function confirmDelete($nom, $id){
        $this->dispatchBrowserEvent('showDeleteMessageCONFIRM',['message'=>[
                'title'=>"Etes-vous sur de continuer ?",
                'text' =>"Vous êtes sur le point de supprimer $nom sur la liste des filieres. voulez-vous continuer?",
                'data'=>['id'=>$id]
            ]
        ]);
    }

    public function deleteLine($id){
        Filiere::destroy($id);
        $this->dispatchBrowserEvent('showsuccessMessageDELETE', 
            ['message'=>'Filiere suprimer avec succès!']);
    }

   
   
}
