<?php

namespace App\Http\Livewire\Client;

use App\Models\Cv;


use Livewire\Component;

class Cvs extends Component
{
    public $cv;
  
   
    
    public function render()
    {
        return view('livewire.client.exemples.cvs.cvs')
                ->extends('layouts.accueil')
                ->section('contenu');
    }
    public function mount($id)
    {
        $this->cv = Cv::find($id);
        
    }

}
