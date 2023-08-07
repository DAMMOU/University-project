<?php

namespace App\Http\Livewire\Client;

use App\Models\Etablissement;
use App\Models\Universite;
use Livewire\Component;

class Accueil extends Component
{
    public function render()
    {
        return view('livewire.client.accueil.accueil',[
            'etablissements'=>Etablissement::get(),
            'universites'=>Universite::get(),
        ])->extends('layouts.accueil')->section('contenu');
    }

    //public function goToEtablissement($id)
    //{
    //    return redirect()->to('/etablissement/{$id}');
    //}
//
}