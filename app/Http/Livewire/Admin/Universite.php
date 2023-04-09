<?php

namespace App\Http\Livewire\Admin;

use App\Models\Universite as ModelsUniversite;
use App\Models\Ville;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Universite extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $currentPage = PAGELIST;
    public $updateLine = [];
    public $newLine = [];

    protected $rules = [
        'newLine.initiale' => 'required|max:6',
        'newLine.nom' => 'required',
        'newLine.ville_id' => 'required',    
    ];
    public function rules(){
        if($this->currentPage == PAGEEDIT){
            return[
                'updateLine.initiale' => ['required', Rule::unique('universites', 'initiale')->ignore($this->updateLine['id'])],
                'updateLine.nom' => ['required', Rule::unique('universites', 'nom')->ignore($this->updateLine['id'])],
                'updateLine.ville_id' => 'required|numeric',
                'updateLine.logo' => 'required',
        
            ];
        }
        return [
            'newLine.initiale' => 'required',
            'newLine.nom' => 'required',
            'newLine.ville_id' => 'required|numeric',
            'newLine.logo' => 'required',
        ];
    }
    
    public function render()
    {
        return view('livewire.admin.universites.index',[
            'universites'=> ModelsUniversite::latest()->paginate(8),
            'villes'=> Ville::get(['id','nom']),
            ])->extends('layouts.master')
              ->section('contenu');
    }

   
    
////////////////////////////////// goTo //////////////////////////////////////////
    public function goToAdd()
    {   
        $this->currentPage = PAGECREATE;  
    }
    public function goTolist()
    {   
        $this->currentPage = PAGELIST;  
    }
    public function goToEdit($id)
    {   
        $this-> updateLine = ModelsUniversite::find($id)->toArray();
        
        $this->currentPage = PAGEEDIT;  
    }
    /////////////////////////////// Add ///////////////////////////////////////////
    public function addLine()
    {  
        $validationAttributes = $this->validate();
        ModelsUniversite::create($validationAttributes['newLine']);
        
        $this->dispatchBrowserEvent('showAddSuccessMessage', 
            ['message'=>"Utilisateur ajouté à  avec succès!"]);
        $this->newLine = [];
    }
/////////////////////////////////Delete/////////////////////////////////////////////////
    public function confirmDelete($nom, $id){
        $this->dispatchBrowserEvent('showConfirmDeleteMessage',['message'=>[
                'title'=>"Etes-vous sur de continuer ?",
                'text' =>"Vous êtes sur le point de supprimer $nom sur la liste des universites. voulez-vous continuer?",
                'data'=>['universite_id'=>$id]
            ]
        ]);
    }
    public function deleteLine($id){
        ModelsUniversite::destroy($id);
        $this->dispatchBrowserEvent('showDeteleUniersitySuccessMessage', 
            ['message'=>'Universite supprimé avec succès!']);
    }
/////////////////////////////////update///////////////////////////////////////////////////////

    public function updateLine(){

        $validationAttributes = $this->validate();
        ModelsUniversite::find($this->updateLine['id'])->update($validationAttributes['updateLine']);
        $this->dispatchBrowserEvent('showUpdateSuccessMessage', 
           ['message'=>'Université mis à jour avec succès!']);
    }
}
