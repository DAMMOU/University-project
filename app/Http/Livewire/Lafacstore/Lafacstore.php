<?php

namespace App\Http\Livewire\Lafacstore;

use App\Models\Category;
use Livewire\Component;

class LafacStore extends Component
{   
    /**
    * Rend la vue Livewire pour la page d'index de lafascstore.
    *
    * @return \Illuminate\View\View
    */

    public function render()
    {
        $categories = Category::get();
        return view('livewire.lafacstore.index',[
            'categories' => $categories,
        ])
            ->layout('layouts.lafac-store')
            ->section('main');
    }   
}
