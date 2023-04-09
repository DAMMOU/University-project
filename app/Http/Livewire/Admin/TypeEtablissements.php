<?php

namespace App\Http\Livewire\Admin;


use App\Models\TypeEtablissement;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class TypeEtablissements extends Component
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
                'updateLine.label' => ['required', Rule::unique('type_etablissements', 'label')->ignore($this->updateLine['id'])],
                'updateLine.desc' => 'max:250',   
                //['required', Rule::unique('etablissements', 'initiale')->ignore($this->updateLine['id'])],
            ];
        }
        return [
            'newLine.label' => 'required|unique:type_etablissements,label|max:250',
            'newLine.desc' => 'max:250',
          
        ];
    }
    public function render()
    {    
        return view('livewire.admin.type-etablissements.index',[
          
            'types' => TypeEtablissement::orderBy('label','asc')->get(['id','label']),
            'title' => "Gestions des types des établissements", 
           
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
        $this-> updateLine = TypeEtablissement::find($id)->toArray();
        $this->currentPage = PAGEEDIT;  
        
    }
    


    public function updateLine(){
       
        $validationAttributes = $this->validate();
        $validationAttributes['updateLine']['label']= ucwords(strtolower($validationAttributes['updateLine']['label']));
        TypeEtablissement::find($this->updateLine['id'])->update($validationAttributes['updateLine']);
        $this->dispatchBrowserEvent('showSuccessMessage', 
           ['message'=>'Type Etablissement mis à jour avec succès!']);
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
        $validationAttributes['newLine']['label']= ucwords(strtolower($validationAttributes['newLine']['label']));
      
        TypeEtablissement::create($validationAttributes['newLine']);
        
        $this->dispatchBrowserEvent('showsuccessMessage', 
            ['message'=>"Type Etablissement ajouté à  avec succès!"]);
        $this->newLine = [];
    }
   

///////////////////////////////////////// DELETE ///////////////////////////////////////////////////
    public function confirmDelete($nom, $id){
        $this->dispatchBrowserEvent('showDeleteMessageCONFIRM',['message'=>[
                'title'=>"Etes-vous sur de continuer ?",
                'text' =>"Vous êtes sur le point de supprimer le type $nom sur la liste des etablissements. 
                            voulez-vous continuer?",
                'data'=>['id'=>$id]
            ]
        ]);
    }

    public function deleteLine($id){
        TypeEtablissement::destroy($id);
        $this->dispatchBrowserEvent('showsuccessMessageDELETE', 
            ['message'=>'Type Etablissement suprimer avec succès!']);
    }

   
   
}
