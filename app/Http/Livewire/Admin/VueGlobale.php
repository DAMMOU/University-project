<?php

namespace App\Http\Livewire\Admin;

use App\Models\Cour;
use App\Models\Cv;
use App\Models\Etablissement;
use App\Models\Exemple;
use App\Models\Filiere;
use App\Models\Formation;
use App\Models\Module;
use App\Models\Region;
use App\Models\Role;
use App\Models\Universite as ModelsUniversite;
use App\Models\User as ModelsUser;
use App\Models\Ville;
use Livewire\Component;

class VueGlobale extends Component
{
    public function render()
    {
        $universitesCount = ModelsUniversite::count();
        $usersCount = ModelsUser::count();
        $etablissementsCount = Etablissement::count();
        $villesCount = Ville::count();
        $formationsCount = Formation::count();
        $filieresCount = Filiere::count();
        $modulesCount = Module::count();
        $coursCount = Cour::count();
        $rolesCount = Role::count();
        $exemplesCount = Exemple::count();
        $regionsCount = Region::count();
        $cvsCount = Cv::count();
    
        $data = collect([
            'universitesCount' => $universitesCount,
            'usersCount' => $usersCount,
            'etablissementsCount' => $etablissementsCount,
            'villesCount' => $villesCount,
            'formationsCount' => $formationsCount,
            'filieresCount' => $filieresCount,
            'modulesCount' => $modulesCount,
            'coursCount' => $coursCount,
            'rolesCount' => $rolesCount,
            'exemplesCount' => $exemplesCount,
            'regionsCount' => $regionsCount,
            'cvsCount' => $cvsCount,
        ]);
        return view('livewire.admin.dashboard.vue-globale',['data' => $data])
            ->extends('layouts.master')
            ->section('contenu');
    }
}
//'universitesCount' => ModelsUniversite::all()->count(),
//'usersCount' => ModelsUser::all()->count(),
//'etablissementsCount' => Etablissement::all()->count(),
//'villesCount' => Ville::all()->count(),
//'formationsCount' => Formation::all()->count(),
//'filieresCount' => Filiere::all()->count(),
//'modulesCount' => Module::all()->count(),
//'coursCount' => Cour::all()->count(),
//'rolesCount' => Role::all()->count(),
//'exemplesCount' => Exemple::all()->count(),