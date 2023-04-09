<?php

namespace App\Http\Livewire\Client;

use App\Models\Etablissement as ModelsEtablissement;

use Livewire\Component;

class Etablissement extends Component
{
    public $etablissement;
    public $formations;
   
    
    public function render()
    {
        return view('livewire.client.etablissement.etablissement')
                ->extends('layouts.accueil')
                ->section('contenu');
    }
    public function mount($id)
    {
        $this->etablissement = ModelsEtablissement::find($id);
        $this->formations = $this->etablissement->formations;
        
    }

}
