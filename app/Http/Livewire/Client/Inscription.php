<?php

namespace App\Http\Livewire\Client;

use App\Models\Utilisateur;
use App\Models\Ville;
use Livewire\Component;

class Inscription extends Component
{

    public $newLine = [];


    public function render()
    {
        $villes = Ville::select('id','nom')->get();
        return view('livewire.client.inscriptions.inscription',compact('villes'))
        ->extends('layouts.accueil')
        ->section('contenu');
    }

    protected $rules = [
        'newLine.nom' => 'required|max:15',
        'newLine.prenom' => 'required|max:15',
        'newLine.sexe' => 'required|max:1',
        'newLine.je_suis' => 'required|max:1',
        'newLine.email' => 'required|email|unique:utilisateurs,email',
        'newLine.ville' => 'required|max:10', 
    ];
 



    public function addLine()
    {  
        $validationAttributes = $this->validate();
        Utilisateur::create($validationAttributes['newLine']);

        session()->flash('message',"Merci pour votre inscription réussie !");

        $this->reset();
        $this->newLine = [];

    }
}