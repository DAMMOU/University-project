<?php

namespace App\Http\Livewire\Admin;

use App\Models\Region;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Regions extends Component
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
                'updateLine.nom' => ['required', Rule::unique('regions', 'nom')->ignore($this->updateLine['id'])],
                'updateLine.desc' => 'max:250',
                //['required', Rule::unique('etablissements', 'initiale')->ignore($this->updateLine['id'])],
            ];
        }
        return [
            'newLine.nom' => 'required|max:250|unique:regions,nom',
            'newLine.desc' => 'max:250',
        ];
    }
    public function render()
    {    
        return view('livewire.admin.regions.index',[
            'regions' => Region::paginate(10),
            'title' => "Gestions des regions"
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
        $this-> updateLine = Region::find($id)->toArray();
        
        $this->currentPage = PAGEEDIT;  
    }
    


    public function updateLine(){
        $validationAttributes = $this->validate();
       
       
        $validationAttributes['updateLine']['nom']= ucwords(strtolower($validationAttributes['updateLine']['nom']));

        Region::find($this->updateLine['id'])->update($validationAttributes['updateLine']);
        $this->dispatchBrowserEvent('showSuccessMessage', 
           ['message'=>'Region mis à jour avec succès!']);
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
        $validationAttributes['newLine']['nom']= ucwords(strtolower($validationAttributes['newLine']['nom']));

       
        Region::create($validationAttributes['newLine']);
        
        $this->dispatchBrowserEvent('showsuccessMessage', 
            ['message'=>"Region ajoutée à  avec succès!"]);
        $this->newLine = [];
    }
   

///////////////////////////////////////// DELETE ///////////////////////////////////////////////////
    public function confirmDelete($nom, $id){
        $this->dispatchBrowserEvent('showDeleteMessageCONFIRM',['message'=>[
                'title'=>"Etes-vous sur de continuer ?",
                'text' =>"Vous êtes sur le point de supprimer la Regions $nom sur la liste des etablissements. 
                            voulez-vous continuer?",
                'data'=>['id'=>$id]
            ]
        ]);
    }

    public function deleteLine($id){
        Region::destroy($id);
        $this->dispatchBrowserEvent('showsuccessMessageDELETE', 
            ['message'=>'Region suprimée avec succès!']);
    }

   
   
}
