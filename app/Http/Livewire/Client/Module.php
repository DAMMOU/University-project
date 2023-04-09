<?php

namespace App\Http\Livewire\Client;

use App\Models\Etablissement as ModelsEtablissement;
use App\Models\Formation;
use App\Models\Module as ModelsModule;
use App\Models\Universite;
use Livewire\Component;

class Module extends Component
{
    
    public $module;
    
    public function render()
    {
        return view('livewire.client.module.module')
                ->extends('layouts.accueil')
                ->section('contenu');
    }
    public function mount($id)
    {
        $this->module = ModelsModule::find($id);
    }

}
