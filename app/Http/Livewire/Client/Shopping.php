<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class Shopping extends Component
{


    public function render()
    {
        return view('livewire.client.shopping.shopping')
                ->extends('layouts.shopping')
                ->section('contenu');
    }
    public function products()
    {
        return view('livewire.client.shopping.products')
                ->extends('layouts.products')
                ->section('contenu');
    }
    public function productDetails()
    {
        return view('livewire.client.shopping.productDetails')
                ->extends('layouts.productDetails')
                ->section('contenu');
    }
    public function account()
    {
        return view('livewire.client.shopping.account')
                ->extends('layouts.account')
                ->section('contenu');
    }
    public function contact()
    {
        return view('livewire.client.shopping.contact')
                ->extends('layouts.contact')
                ->section('contenu');
    }
    public function cart()
    {
        return view('livewire.client.shopping.cart')
                ->extends('layouts.cart')
                ->section('contenu');
    }
  
    

}
