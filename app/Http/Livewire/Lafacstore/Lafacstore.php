<?php

namespace App\Http\Livewire\Lafacstore;

use App\Models\Category;
use App\Models\Product;
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
        $categories = Category::all();
        $products = Product::all();
        return view('livewire.lafacstore.index',[
            'categories' => $categories,
            'products' => $products,
        ])
            ->layout('layouts.lafac-store')
            ->section('main');
    }   
}
