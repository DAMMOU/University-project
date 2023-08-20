<?php

namespace App\Http\Livewire\Client;

use App\Models\Formation as ModelsFormation;
use Livewire\Component;

class Formation extends Component
{

    public $formation;
    public $filieres;
   
    
    public function render()
    {
        return view('livewire.client.formations.formations')
                ->extends('layouts.accueil')
                ->section('contenu');
    }
    public function mount($id)
    {
        $this->formation = ModelsFormation::find($id);
        
        //$this->filieres = $this->formation->filieres;
        //dd($this->filieres );
    }

}
