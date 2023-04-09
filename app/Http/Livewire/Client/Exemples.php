<?php

namespace App\Http\Livewire\Client;

use App\Models\Cv;
use App\Models\Exemple;
use Livewire\Component;

class Exemples extends Component
{
    
   
    
    public function render()
    {
        return view('livewire.client.exemples.exemples',[
            'cvs'=> Cv::get(),
        ])
                ->extends('layouts.accueil')
                ->section('contenu');
    }
    
}
