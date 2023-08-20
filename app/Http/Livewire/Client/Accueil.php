<?php

namespace App\Http\Livewire\Client;

use App\Models\Etablissement;
use App\Models\Setting;
use App\Models\Universite;
use Livewire\Component;

class Accueil extends Component
{
    public function render()
{
    $metadata = $this->getMetadataInformation();
    $etablissements = Etablissement::get();
    $universites = Universite::get();
    
    return view('livewire.client.accueil.accueil', [
        'metadata' => $metadata,
        'etablissements' => $etablissements,
        'universites' => $universites,
    ])->extends('layouts.accueil')->section('contenu');
}

    /**
     * Get metadata information for the page
     * 
     * @return array
     */

    public function getMetadataInformation(){
        // Define the names of metadata required on the page need
        $metadataRows = ['title', 'author', 'keywords', 'description', 'js', 'css'];

        $settings = Setting::whereIn('name', $metadataRows)->get();// Retrieve the relevant settings from the database
        
        $metadata = []; // Initialize an array to store metadata information
        // Populate the metadata array with retrieved settings
        foreach ($settings as $setting) {
            if(in_array($setting['name'], $metadataRows)){
                $metadata[$setting['name']] = $setting['value'];
            }else{
                $metadata[$setting['name']] = '';
            }
        }
        // Return the metadata
        return $metadata;
    }

    //public function goToEtablissement($id)
    //{
    //    return redirect()->to('/etablissement/{$id}');
    //}
//
}