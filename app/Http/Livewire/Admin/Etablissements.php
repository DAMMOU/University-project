<?php

namespace App\Http\Livewire\Admin;

use App\Models\CategorieEtablissement;
use App\Models\Etablissement;
use App\Models\TypeEtablissement;
use App\Models\Universite;
use App\Models\Ville;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Etablissements extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $isBtnAddCliked = false;
    public $currentPage = PAGELIST;
    public $newLine = [];
    public $updateLine = [];
    

    public function rules(){
        if($this->currentPage == PAGEEDIT){
            return[
                'updateLine.initiale' => 'required',
                'updateLine.nom' => 'required',
                'updateLine.ville_id' => 'required|numeric',
                'updateLine.universite_id' => 'required|numeric',
                'updateLine.categorie_etablissement_id' => 'required|numeric',
                'updateLine.type_etablissement_id' => 'required|numeric',
                'updateLine.desc' => 'required|max:250',
                'updateLine.logo' => 'required|max:250',
                'updateLine.site' => 'required|max:250',
                'updateLine.adresse' => 'max:250',
                //['required', Rule::unique('etablissements', 'initiale')->ignore($this->updateLine['id'])],
            ];
        }
        return [
            'newLine.initiale' => 'required|max:15',
            'newLine.nom' => 'required|max:15',
            'newLine.universite_id' => 'required|numeric',
            'newLine.ville_id' => 'required|numeric',
            'newLine.categorie_etablissement_id' => 'required|numeric',
            'newLine.type_etablissement_id' => 'required|numeric',
            'newLine.nom' => 'required|max:250',
            'newLine.logo' => 'required|max:250',
            'newLine.site' => 'required|max:250',
            'newLine.desc' => 'required|max:250',
            'newLine.adresse' => 'max:250',
        ];
    }
    public function render()
    {    
        return view('livewire.admin.etablissements.index',[
            'etablissements' => Etablissement::latest()->paginate(9),
            'villes' => Ville::orderBy('nom','asc')->get(['id','nom']),
            'universites' => Universite::orderBy('nom','asc')->get(['id','nom']),
            'types' => TypeEtablissement::get(['id','label']),
            'categories' => CategorieEtablissement::get(['id','label']),
         
            'title' => "Gestions des établissements"
        ])
            ->extends('layouts.master')
            ->section('contenu');
    }
    
    
    public function goTolist()
    {   
        $this->currentPage = PAGELIST;  
    }






///////////////////////////////////  UPDATE  //////////////////////////////////////////////////////


    public function goToUpdate($id)
    {   
        $this-> updateLine = Etablissement::find($id)->toArray();
        
        $this->currentPage = PAGEEDIT;  
    }
    


    public function updateLine(){
        $validationAttributes = $this->validate();
       
        $validationAttributes['updateLine']['initiale']= strtoupper($validationAttributes['updateLine']['initiale']);
        $validationAttributes['updateLine']['nom']= ucwords(strtolower($validationAttributes['updateLine']['nom']));
        $validationAttributes['updateLine']['adresse']= ucwords(strtolower($validationAttributes['updateLine']['adresse']));
      
        Etablissement::find($this->updateLine['id'])->update($validationAttributes['updateLine']);
        $this->dispatchBrowserEvent('showSuccessMessage', 
           ['message'=>'Etablissement mis à jour avec succès!']);
    }


//////////////////////////////////////////// ADD //////////////////////////////////////////////////////////
    public function goToAdd()
        {   
            $this->currentPage = PAGECREATE;  
        }

    public function addLine()
    {
        
        $validationAttributes = $this->validate();
        //dump($validationAttributes);
        $validationAttributes['newLine']['initiale']= strtoupper($validationAttributes['newLine']['initiale']);
        $validationAttributes['newLine']['nom']= ucwords(strtolower($validationAttributes['newLine']['nom']));
        $validationAttributes['newLine']['adresse']= ucwords(strtolower($validationAttributes['newLine']['adresse']));
      
        Etablissement::create($validationAttributes['newLine']);
        
        $this->dispatchBrowserEvent('showsuccessMessage', 
            ['message'=>"Etablissement ajouté à  avec succès!"]);
        $this->newLine = [];
    }
   

///////////////////////////////////////// DELETE ///////////////////////////////////////////////////
    public function confirmDelete($nom, $id){
        $this->dispatchBrowserEvent('showDeleteMessageCONFIRM',['message'=>[
                'title'=>"Etes-vous sur de continuer ?",
                'text' =>"Vous êtes sur le point de supprimer $nom sur la liste des etablissements. 
                            voulez-vous continuer?",
                'data'=>['id'=>$id]
            ]
        ]);
    }

    public function deleteLine($id){
        Etablissement::destroy($id);
        $this->dispatchBrowserEvent('showsuccessMessageDELETE', 
            ['message'=>'Etablissement suprimer avec succès!']);
    }

   
   
}
