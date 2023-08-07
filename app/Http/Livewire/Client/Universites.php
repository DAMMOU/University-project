<?php

namespace App\Http\Livewire\Client;

use App\Models\Universite;
use Livewire\Component;

class Universites extends Component
{

   
    
    public function render()
    {   
      
        return view('livewire.client.universites.universites',[
    
            'universites'=>Universite::get(),
            ])
                ->extends('layouts.accueil')
                ->section('contenu');
    }
    

}
