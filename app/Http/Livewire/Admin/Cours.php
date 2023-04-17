<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cour;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
class Cours extends Component
{
    use WithPagination;use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $isBtnAddCliked = false;
    public $currentPage = PAGELIST;
    public $table = "Cours";
    public $tabelIn = "";
    public $newLine = [];
    public $updateLine = [];
    public $file;
    public function render()
    {
        return view('livewire.admin.cours.index',[
            'cours' => Cour::latest()->paginate(10),
        ])
            ->extends('layouts.master')
            ->section('contenu');
    }
    public function rules(){
        if($this->currentPage == PAGEEDIT){
            return[
                'updateLine.label' => 'required| numeric',
                'updateLine.path' => 'required',
                'updateLine.domain' => 'required',
            ];
        }
        return [
            'newLine.label' => 'required| min:5',
            'newLine.path' => 'required| max:255',
            'newLine.domain' => 'required| max:255',
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
        $this-> updateLine = Cour::find($id)->toArray();
        
        $this->currentPage = PAGEEDIT; 
        $this->tabelIn = ' / Editer';  
    }

    public function updateLine(){
        
        $validationAttributes = $this->validate();
    
        Cour::find($this->updateLine['id'])->update($validationAttributes['updateLine']);
        $this->dispatchBrowserEvent('showsuccessMessage', 
           ['message'=>'Cours mis à jour avec succès!']);
    }
    


    public function addLine()
    {  
        $validationAttributes = $this->validate();
        Cour::create($validationAttributes['newLine']);
        
        $this->dispatchBrowserEvent('showsuccessMessage', 
            ['message'=>"Cour ajouté à  avec succès!"]);
        $this->newLine = [];
    }
   


    public function confirmDelete($label, $id){
        $this->dispatchBrowserEvent('showDeleteMessageCONFIRM',['message'=>[
                'title'=>"Etes-vous sur de continuer ?",
                'text' =>"Vous êtes sur le point de supprimer $label sur la liste des cours. voulez-vous continuer?",
                'data'=>['id'=>$id]
            ]
        ]);
    }

    public function deleteLine($id){
        Cour::destroy($id);
        $this->dispatchBrowserEvent('showsuccessMessageDELETE', 
            ['message'=>'Cours suprimer avec succès!']);
    }

}
