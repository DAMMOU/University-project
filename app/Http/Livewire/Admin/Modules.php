<?php

namespace App\Http\Livewire\Admin;


use App\Models\Module;
use App\Models\Filiere;
use Livewire\Component;
use Livewire\WithPagination;

class Modules extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $isBtnAddCliked = false;
    public $currentPage = PAGELIST;
    public $table = "Modules";
    public $tabelIn = "";
    public $newLine = [];
    public $updateLine = [];
    

    public function render()
    {    
        return view('livewire.admin.modules.index',[
            'modules' => Module::latest()->paginate(10),
            'filieres' => Filiere::all(),
        ])
            ->extends('layouts.master')
            ->section('contenu');
    }
    public function rules(){
        if($this->currentPage == PAGEEDIT){
            return[
                'updateLine.filiere_id' => 'required| numeric',
                'updateLine.code' => 'required',
                'updateLine.intitule' => 'required',
                'updateLine.desc' => 'required',
            ];
        }
        return [
            'newLine.filiere_id' => 'required| numeric',
            'newLine.code' => 'required| max:6',
            'newLine.intitule' => 'required| max:255',
            'newLine.desc' => 'required| max:255',
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
        $this-> updateLine = Module::find($id)->toArray();
        
        $this->currentPage = PAGEEDIT; 
        $this->tabelIn = ' / Editer';  
    }

    public function updateLine(){
        
        $validationAttributes = $this->validate();
      
        $validationAttributes['updateLine']['code']= strtoupper($validationAttributes['updateLine']['code']);
        $validationAttributes['updateLine']['intitule']= ucwords(strtolower($validationAttributes['updateLine']['intitule']));
      
        Module::find($this->updateLine['id'])->update($validationAttributes['updateLine']);
        $this->dispatchBrowserEvent('showsuccessMessage', 
           ['message'=>'Module mis à jour avec succès!']);
    }
    


    public function addLine()
    {  
        $validationAttributes = $this->validate();
        $validationAttributes['newLine']['code']= strtoupper($validationAttributes['newLine']['code']);
        $validationAttributes['newLine']['intitule']= ucwords(strtolower($validationAttributes['newLine']['intitule']));
      
        Module::create($validationAttributes['newLine']);
        
        $this->dispatchBrowserEvent('showsuccessMessage', 
            ['message'=>"Module ajouté à  avec succès!"]);
        $this->newLine = [];
    }
   


    public function confirmDelete($nom, $id){
        $this->dispatchBrowserEvent('showDeleteMessageCONFIRM',['message'=>[
                'title'=>"Etes-vous sur de continuer ?",
                'text' =>"Vous êtes sur le point de supprimer $nom sur la liste des modules. voulez-vous continuer?",
                'data'=>['id'=>$id]
            ]
        ]);
    }

    public function deleteLine($id){
        Module::destroy($id);
        $this->dispatchBrowserEvent('showsuccessMessageDELETE', 
            ['message'=>'Module suprimer avec succès!']);
    }

   
   
}
