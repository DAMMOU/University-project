<?php

namespace App\Http\Livewire\Admin;

use App\Models\Permission;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Permissions extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $isBtnAddCliked = false;
    public $currentPage = PAGELIST;
    public $table = "Permissions";
    public $tabelIn = "";
    public $newLine = [];
    public $updateLine = [];
    

    public function render()
    {    
        return view('livewire.admin.permissions.index',[
            'permissions' => Permission::latest()->paginate(10),
        ])
            ->extends('layouts.master')
            ->section('contenu');
    }
    public function rules(){
        if($this->currentPage == PAGEEDIT){
            return[
                'updateLine.label' => ['required', Rule::unique('permissions', 'label')->ignore($this->updateLine['id'])],        
            ];
        }
        return [
            'newLine.label' => 'required|max:245',
            'newLine.desc' => 'required|max:245',
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
        $this-> updateLine = Permission::find($id)->toArray();
        
        $this->currentPage = PAGEEDIT; 
        $this->tabelIn = ' / Editer';  
    }

    public function updateLine(){
        $validationAttributes = $this->validate();
        Permission::find($this->updateLine['id'])->update($validationAttributes['updateLine']);
        $this->dispatchBrowserEvent('showsuccessMessage', 
           ['message'=>'Permission mis à jour avec succès!']);
    }
    


    public function addLine()
    {
        $validationAttributes = $this->validate();
        Permission::create($validationAttributes['newLine']);
        
        $this->dispatchBrowserEvent('showsuccessMessage', 
            ['message'=>"Permission ajouté à  avec succès!"]);
        $this->newLine = [];
    }
   


    public function confirmDelete($nom, $id){
        $this->dispatchBrowserEvent('showDeleteMessageCONFIRM',['message'=>[
                'title'=>"Etes-vous sur de continuer ?",
                'text' =>"Vous êtes sur le point de supprimer $nom dans la liste des Permissions. voulez-vous continuer?",
                'data'=>['id'=>$id]
            ]
        ]);
    }

    public function deleteLine($id){
        Permission::destroy($id);
        $this->dispatchBrowserEvent('showsuccessMessageDELETE', 
            ['message'=>'Permission suprimer avec succès!']);
    }

   
   
}
