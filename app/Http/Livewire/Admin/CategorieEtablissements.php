<?php

namespace App\Http\Livewire\Admin;

use App\Models\CategorieEtablissement;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class CategorieEtablissements extends Component
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
                'updateLine.label' => ['required', Rule::unique('categorie_etablissements', 'label')->ignore($this->updateLine['id'])],
                'updateLine.desc' => 'max:250',
                //['required', Rule::unique('etablissements', 'initiale')->ignore($this->updateLine['id'])],
            ];
        }
        return [
            'newLine.label' => 'required|max:250|unique:categorie_etablissements,label',
            'newLine.desc' => 'max:250',
        ];
    }
    public function render()
    {    
        return view('livewire.admin.categorie-etablissements.index',[
            'categories' => CategorieEtablissement::orderBy('label','asc')->get(['id','label']),
            'title' => "Gestions des categories établissements"
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
        $this-> updateLine = CategorieEtablissement::find($id)->toArray();
        
        $this->currentPage = PAGEEDIT;  
    }
    


    public function updateLine(){
        $validationAttributes = $this->validate();
       
       
        $validationAttributes['updateLine']['label']= strtoupper($validationAttributes['updateLine']['label']);

        CategorieEtablissement::find($this->updateLine['id'])->update($validationAttributes['updateLine']);
        $this->dispatchBrowserEvent('showSuccessMessage', 
           ['message'=>'Catégorie mis à jour avec succès!']);
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
        $validationAttributes['newLine']['label']= strtoupper($validationAttributes['newLine']['label']);
       
        CategorieEtablissement::create($validationAttributes['newLine']);
        
        $this->dispatchBrowserEvent('showsuccessMessage', 
            ['message'=>"Catégorie ajoutée à  avec succès!"]);
        $this->newLine = [];
    }
   

///////////////////////////////////////// DELETE ///////////////////////////////////////////////////
    public function confirmDelete($nom, $id){
        $this->dispatchBrowserEvent('showDeleteMessageCONFIRM',['message'=>[
                'title'=>"Etes-vous sur de continuer ?",
                'text' =>"Vous êtes sur le point de supprimer la catégories $nom sur la liste des etablissements. 
                            voulez-vous continuer?",
                'data'=>['id'=>$id]
            ]
        ]);
    }

    public function deleteLine($id){
        CategorieEtablissement::destroy($id);
        $this->dispatchBrowserEvent('showsuccessMessageDELETE', 
            ['message'=>'Catégorie suprimée avec succès!']);
    }

   
   
}
