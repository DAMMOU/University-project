<?php

namespace App\Http\Livewire\Client;

use App\Models\Utilisateur;
use Livewire\Component;

class Utilisateurs extends Component
{

    public $newLine = [];


    public function render()
    {
        return view('livewire.client.inscriptions.inscription')
        ->extends('layouts.accueil')
        ->section('contenu');
    }

    protected $rules = [
        'newLine.nom' => 'required|max:255',
        'newLine.prenom' => 'required|max:255',
        'newLine.sexe' => 'required|ma5x:25',
        'newLine.je_suis' => 'required|max:10',
        'newLine.email' => 'required|email|unique:utilisateurs,email',
        'newLine.ville' => 'required|max:10', 
    ];


    //public function addLine()
    //{  
    //    $validationAttributes = $this->validate();
    //    Utilisateur::create($validationAttributes['newLine']);
//
    //    session()->flash('message',"Merci pour votre inscription réussie !");
//
    //    $this->reset();
    //    $this->newLine = [];
//
    //}
}//