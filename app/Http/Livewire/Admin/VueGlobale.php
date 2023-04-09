<?php

namespace App\Http\Livewire\Admin;

use App\Models\Etablissement;
use App\Models\Universite as ModelsUniversite;
use App\Models\User as ModelsUser;
use App\Models\Ville;
use Livewire\Component;

class VueGlobale extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.vue-globale',[
            'universitesCount' => ModelsUniversite::all()->count(),
            'usersCount' => ModelsUser::all()->count(),
            'etablissementsCount' => Etablissement::all()->count(),
            'villesCount' => Ville::all()->count(),
        ])
            ->extends('layouts.master')
            ->section('contenu');
    }
}
