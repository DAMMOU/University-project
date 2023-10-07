<?php

namespace App\Http\Livewire\Lafacstore;


use Livewire\Component;

class About extends Component
{   
    /**
    * Rend la vue Livewire pour la page d'index de lafascstore.
    *
    * @return \Illuminate\View\View
    */

    public function render()
    {
        return view('livewire.lafacstore.about-us.index')
            ->layout('layouts.lafac-store')
            ->section('main');
    }   
}
