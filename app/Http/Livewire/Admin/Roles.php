<?php

namespace App\Http\Livewire\Admin;

use App\Models\Role;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Roles extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $isBtnAddCliked = false;
    public $currentPage = PAGELIST;
    public $table = "Roles";
    public $tabelIn = "";
    public $newLine = [];
    public $updateLine = [];
    

    public function render()
    {    
        return view('livewire.admin.roles.index',[
            'roles' => Role::latest()->paginate(5),
        ])
            ->extends('layouts.master')
            ->section('contenu');
    }
    public function rules(){
        if($this->currentPage == PAGEEDIT){
            return[
                'updateLine.name' => ['required', Rule::unique('roles', 'name')->ignore($this->updateLine['id'])],        
            ];
        }
        return [
            'newLine.name' => 'required|max:15',
        ];
    }
    public function goToAdd()
    {   
        $this->currentPage = PAGECREATE;  
        $this->tabelIn = ' / Ajouter';  
    }
    public function goTolist()
    {   
        $this->currentPage = PAGELIST;  
    }
    public function goToUpdate($id)
    {   
        $this-> updateLine = Role::find($id)->toArray();
        
        $this->currentPage = PAGEEDIT; 
        $this->tabelIn = ' / Editer';  
    }

    public function updateLine(){
        $validationAttributes = $this->validate();
        Role::find($this->updateLine['id'])->update($validationAttributes['updateLine']);
        $this->dispatchBrowserEvent('showsuccessMessage', 
           ['message'=>'Role mis à jour avec succès!']);
    }
    


    public function addLine()
    {
        $validationAttributes = $this->validate();
        Role::create($validationAttributes['newLine']);
        
        $this->dispatchBrowserEvent('showsuccessMessage', 
            ['message'=>"Role ajouté à  avec succès!"]);
        $this->newLine = [];
    }
   


    public function confirmDelete($nom, $id){
        $this->dispatchBrowserEvent('showDeleteMessageCONFIRM',['message'=>[
                'title'=>"Etes-vous sur de continuer ?",
                'text' =>"Vous êtes sur le point de supprimer $nom sur la liste des roles. voulez-vous continuer?",
                'data'=>['id'=>$id]
            ]
        ]);
    }

    public function deleteLine($id){
        Role::destroy($id);
        $this->dispatchBrowserEvent('showsuccessMessageDELETE', 
            ['message'=>'Role suprimer avec succès!']);
    }

   
   
}
