<?php

namespace App\Http\Livewire\Admin;

use App\Models\Region;
use App\Models\Ville;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Villes extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $isBtnAddCliked = false;
    public $currentPage = PAGELIST;
    public $newLine = [];
    public $updateLine = [];


////////////////////////////////////////////////////////////////////////////////////////////////   
////////////////////////////////////////////////////////////////////////////////////////////////
    public function render()
    {    
        return view('livewire.admin.villes.index',[
            'villes' => Ville::latest()->paginate(9),
            'regions' => Region::orderBy('nom','asc')->get(['id','nom']),
        ])
            ->extends('layouts.master')
            ->section('contenu');
    }
///////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////                     
    public function rules(){
        if($this->currentPage == PAGEEDIT){
            return[
                'updateLine.nom' => ['required', Rule::unique('villes', 'nom')->ignore($this->updateLine['id'])],
                'updateLine.cp' => ['required', Rule::unique('villes', 'cp')->ignore($this->updateLine['id'])],
                'updateLine.region_id' => 'required|numeric',
                'updateLine.desc' => 'max:250',
        
            ];
        }
        return [
            'newLine.nom' => 'required|max:250|unique:villes,nom',
            'newLine.region_id' => 'required|numeric',
            'newLine.cp' => 'required|numeric',
            'newLine.desc' => 'max:250',
        ];
    }
/////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////
    public function goTolist()
    {   
        $this->currentPage = PAGELIST;  
    }



////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////
    public function goToAdd()
    {   
        $this->currentPage = PAGECREATE;  
    }

    public function addLine()
        {
            $validationAttributes = $this->validate();
            Ville::create($validationAttributes['newLine']);
            
            $this->dispatchBrowserEvent('showsuccessMessage', 
                ['message'=>"Ville ajouté à  avec succès!"]);
            $this->newLine = [];
        }





////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////
    public function goToUpdate($id)
    {   
        $this-> updateLine = Ville::find($id)->toArray();
        
        $this->currentPage = PAGEEDIT;  
    }

    public function updateLine(){
        $validationAttributes = $this->validate();
        Ville::find($this->updateLine['id'])->update($validationAttributes['updateLine']);
        $this->dispatchBrowserEvent('showSuccessMessage', 
           ['message'=>'Ville mis à jour avec succès!']);
    }
   
    


    
   
///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
    public function confirmDelete($nom, $id){
        $this->dispatchBrowserEvent('showDeleteMessageCONFIRM',['message'=>[
                'title'=>"Etes-vous sur de continuer ?",
                'text' =>"Vous êtes sur le point de supprimer $nom sur la liste des Villes. voulez-vous continuer?",
                'data'=>['id'=>$id]
            ]
        ]);
    }

    public function deleteLine($id){
        Ville::destroy($id);
        $this->dispatchBrowserEvent('showsuccessMessageDELETE', 
            ['message'=>'Ville suprimer avec succès!']);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////
   
}
